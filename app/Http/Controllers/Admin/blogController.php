<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Helpers\Helpers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogTopic;

class blogController extends Controller
{
    public function blogs($shop_id = NULL)
    {

        $user = User::where('role', 'Admin')->first();
        $user_id = $user->id;

        if ($shop_id) {
            $user_id = Helpers::checkB2BShopStatus($shop_id);

            if ($user_id === false) {
                return redirect('/');
            }
        }
        return view('frontEnd.Pages.blogs.blogsList')->with(compact('user_id', 'shop_id'));
    }


    public function blogDetails($blogID, $shop_id = NULL)
    {
        if (! Blog::find($blogID)) {
            return response()->json(['errors' => 'Blog Not Found']);
        }

        $user = User::where('role', 'Admin')->first();
        $user_id = $user->id;

        if ($shop_id) {
            $user_id = Helpers::checkB2BShopStatus($shop_id);

            if ($user_id === false) {

                return redirect('/');
            }
        }
        return view('frontEnd.Pages.blogs.blogDetails')->with(compact('user_id', 'blogID', 'shop_id'));
    }


    public function listBlogsForAdmin(Request $request,)
    {

        // Check if the user is authenticated
        if (!Auth::check()) {
            // If not authenticated, redirect to login page
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }

        // Fetch all blogs (you can add further query filters if needed)
        $blogs = Blog::select('*')->orderby('created_at', 'desc')->get();
        // dd($blogs);

        // Return the view with the list of blogs
        return view('admin/pages/blogs/blogsList')->with(compact('blogs'));
    }


    public function AddBlogsForAdmin(Request $request,)
    {
        $topics = BlogTopic::select('topic', 'id')->get();
        return view('admin/pages/blogs/addBlogs')->with(compact('topics'));
    }



    // for listing
    public function listBlogsForAdminApi(Request $request)
    {
        $user = Auth::guard('api')->user();
        $user_id = $user->id;
        $b2b_id = $request->query('b2b_id');
        // dd($b2b_id);

        if ($user->role == 'Admin' || $user->role == 'b2b') {

            // Initialize the query
            $Blog = Blog::select('*');

            // Modify query based on the existence of $b2b_id
            // where('created_by', $user_id)
            if ($b2b_id) {
                $Blog->where('created_by', $b2b_id);
            } else {
                $Blog->where('created_by', $user_id);
            }

            $Blogs = $Blog->orderBy('created_at', 'desc')->get();
        } else {
            $Blogs = 'Blog not found';
        }

        if (count($Blogs)) {
            return response()->json(['Blogs' => $Blogs, 'user' => $user]);
        } else {
            return response()->json(['errors' => 'Blog Not Found']);
        }
    }


    // for delete
    public function deleteBlogsForAdminApi(Request $request, $id)
    {



        $deletedBlog = Blog::where('id', $id)->delete();

        if ($deletedBlog) {
            $request->session()->flash('success', 'Blog Deleted Successfully');
        } else {
            $request->session()->flash('error', 'Blog Not Deleted');
        }

        // Return response (redirect to the same page)
        return redirect()->to('listBlogsForAdmin');
    }


    // for save
    public function saveBlogsForAdminApi(Request $request)
    {
        $status = $request->input('action');
        // dd($status);
        // Validate the incoming data
        $validatedData = $request->validate([
            'topic' => 'required|string',
            'heading' => 'required|string|max:255|unique:blogs',
            'content' => 'required|string|max:100000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt',
            'pdf' => 'nullable|mimes:pdf',
            'seo_title' => 'required',
            'seo_decription' => 'required',
            'status' => 'nullable|string|in:save,publish',
        ]);

        // dd($request->all());
        $user = Auth::user(); // Get the authenticated user

        // dd($user);
        // Initialize file paths
        $imagePath = null;
        $videoPath = null;
        $pdfPath = null;





        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->move(public_path('backend/blog/images'), $imageName);
            $imagePath = 'backend/blog/images/' . $imageName;
        }

        // Handle Video Upload
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('blogs/videos', 'public');
        }

        // Handle PDF Upload
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('blogs/pdfs', 'public');
        }

        // // Determine the status
        // $status = $validatedData['status'] ?? 'save'; // Default to 'save' if not provided

        // Create the blog entry
        $blog = Blog::create([
            'topic' => $validatedData['topic'],
            'slug' => strtolower(preg_replace('/--+/', '-', preg_replace('/[^a-zA-Z0-9_]/', '-', $validatedData['heading']))),
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
            'video' => $videoPath,
            'pdf' => $pdfPath,
            'seo_title' => $validatedData['seo_title'],
            'seo_decription' => $validatedData['seo_decription'],
            'status' => $status,
            'created_by' => $user->id
        ]);

        // Store success message in session
        session()->flash('success', 'Blog ' . ($status == 'publish' ? 'published' : 'saved') . ' successfully!');

        // Optionally, return the blog ID or any other data if needed
        return redirect()->route('AddBlogsForAdmin'); // Redirect to the blogs index page or your desired page
    }



    public function editBlogsForAdmin(Request $request, $id,)
    {
        $topics = BlogTopic::select('topic', 'id')->get();
        // dd($topic);

        $Blogs = Blog::select()->where('id', $id)->get();
        return view('admin/pages/blogs/editBlogs')->with(compact('topics', 'Blogs'));
    }




    // Fetch blog details for editing
    public function fetchBlogDetailsApi($id)
    {
        $user = Auth::guard('api')->user();
        if (!in_array($user->role, ['Admin', 'b2b'])) {
            return response()->json(['status' => '0', 'message' => 'Unauthorized users'], 200);
        }


        $blog = Blog::where('id', $id)->where('created_by', $user->id)->first();
        if ($blog) {
            return response()->json([
                'status' => '1',
                'data' => [
                    'topic' => $blog->topic,
                    'heading' => $blog->heading,
                    'content' => $blog->content,
                    'image_url' => $blog->image ? url('storage/' . $blog->image) : null,
                    'video_url' => $blog->video ? url('storage/' . $blog->video) : null,
                    'pdf_name' => $blog->pdf ? $blog->pdf : null,
                ]
            ]);
        } else {
            return response()->json(['status' => '0', 'message' => 'Blog not found!'], 404);
        }
    }


    // Update blog details for Admin
    public function updateBlogsForAdminApi(Request $request)
    {

        $status = $request->input('action');

        // Validate the incoming data
        $validatedData = $request->validate([
            'blogId' => 'required',
            'topic' => 'required|string',
            'heading' => 'required|string|max:255',
            'content' => 'required|string|max:100000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt',
            'pdf' => 'nullable|mimes:pdf',
            'seo_title' => 'required',
            'seo_decription' => 'required',
            'action' => 'nullable|string|in:save,publish', // Optional: if you want to differentiate between save and publish
        ]);


        $id = $validatedData['blogId'];
        // Find the blog for the given id created by the user
        $blog = Blog::where('id', $id)->first();

        if (!$blog) {
            return response()->json(['status' => '0', 'message' => 'Blog not found!']);
        }

        // Initialize file paths
        $imagePath = $blog->image;
        $videoPath = $blog->video;
        $pdfPath = $blog->pdf;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->move(public_path('backend/blog/images'), $imageName);
            $imagePath = 'backend/blog/images/' . $imageName;
        }

        // Handle Video Upload (delete old file if new video is uploaded)
        if ($request->hasFile('video')) {
            if ($videoPath && Storage::disk('public')->exists($videoPath)) {
                Storage::disk('public')->delete($videoPath);  // Delete the old video
            }
            $videoPath = $request->file('video')->store('blogs/videos', 'public');
        }

        // Handle PDF Upload (delete old file if new PDF is uploaded)
        if ($request->hasFile('pdf')) {
            if ($pdfPath && Storage::disk('public')->exists($pdfPath)) {
                Storage::disk('public')->delete($pdfPath);  // Delete the old PDF
            }
            $pdfPath = $request->file('pdf')->store('blogs/pdfs', 'public');
        }

        // dd($validatedData['action']);
        // Update blog fields
        $blog->update([
            'topic' => $validatedData['topic'],
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
            'video' => $videoPath,
            'pdf' => $pdfPath,
            'seo_title' => $validatedData['seo_title'],
            'seo_decription' => $validatedData['seo_decription'],
            'status' => $validatedData['action'] ?? 'save', // Default to 'save' if not provided
        ]);


        // Store success message in session
        session()->flash('success', 'Blog ' . ($status == 'publish' ? 'published' : 'saved') . ' successfully!');

        // Optionally, return the blog ID or any other data if needed
        return redirect()->to('editBlogsForAdmin/' . $id); // Redirect to the blogs index page or your desired page
    }


    // For showing in front end with compact
    function listBlogsFrontEnd(Request $request)
    {

        $blogLTS = Blog::where('status', 'publish')->whereNotNull('image')->orderby('created_at', 'desc')->take(5)->get();
        $blogRAN = Blog::where('status', 'publish')->whereNotNull('image')->get();
        $blogTPC = Blog::where('status', 'publish')->whereNotNull('image')->get()->unique('topic')->take(5);

        // dd($blogLTS, $blogRAN, $blogTPC);
        return view('frontend.blogLists', compact('blogLTS', 'blogRAN', 'blogTPC'));
    }


    // For showing in front end with compact
    function blogDetailFrontEnd(Request $request, $slug)
    {

        $blogFND = Blog::where('status', 'publish')->whereNotNull('image')->where('slug', $slug)->first();
        if ($blogFND) {
            $blogLTS = Blog::where('status', 'publish')->whereNotNull('image')->orderby('created_at', 'desc')->take(5)->get();
            $blogRAN = Blog::where('status', 'publish')->whereNotNull('image')->get();
            $blogTPC = Blog::where('status', 'publish')->whereNotNull('image')->get()->unique('topic')->take(5);
    
            // dd($blogFND, $blogLTS, $blogRAN, $blogTPC);
            return view('frontend.blogdetail', compact('blogFND', 'blogLTS', 'blogRAN', 'blogTPC'));
        }else {
            echo 'Blog details not found';
        }
    }


    // For showing in front end with API
    function listBlogsForUsersApi(Request $request)
    {
        $b2b_id = $request->b2b_id;
        // Get blogs with images, featured, PDFs, and videos
        $blogIMG = Blog::where('created_by', $b2b_id)->where('status', 'publish')->whereNotNull('image')->take(4)->get();
        $blogFTR = Blog::where('created_by', $b2b_id)->where('status', 'publish')->whereNotNull('image')->inRandomOrder()->take(5)->get();
        $blogVED = Blog::where('created_by', $b2b_id)->where('status', 'publish')->whereNotNull('video')->take(8)->get();
        $blogPDF = Blog::where('created_by', $b2b_id)->where('status', 'publish')->whereNotNull('pdf')->take(8)->get();

        // Get distinct topics
        $blogTPC = Blog::where('created_by', $b2b_id)->where('status', 'publish')->whereNotNull('image')->distinct('topic')->take(3)->get();

        // Function to add created_by_name and format created_at
        $addUserNamesAndFormatDate = function ($blogs) {
            return $blogs->map(function ($blog) {
                $blog->created_by_name = Helpers::getUserNameByUserID($blog->created_by);
                // Format created_at to DD/MM/YYYY for the API response
                $blog->formatted_created_at = $blog->created_at ? $blog->created_at->format('d/m/Y') : null;
                return $blog;
            });
        };

        return response()->json([
            'status' => '1',
            'blogIMG' => $addUserNamesAndFormatDate($blogIMG),
            'blogFTR' => $addUserNamesAndFormatDate($blogFTR),
            'blogVED' => $addUserNamesAndFormatDate($blogVED),
            'blogPDF' => $addUserNamesAndFormatDate($blogPDF),
            'blogTPC' => $addUserNamesAndFormatDate($blogTPC),
        ], 200);
    }




    // For showing in front end with API by his blogID
    function blogDetailsForUsersApi(Request $request, $blogID,  $b2b_id = null)
    {
        // Get blogs with images, featured, PDFs, and videos

        $blogFND = Blog::where('id', $blogID)->get();
        $blogIMG = Blog::where('status', 'publish')->whereNotNull('image')->take(4)->get();
        $blogFTR = Blog::where('status', 'publish')->whereNotNull('image')->inRandomOrder()->take(5)->get();
        $blogVED = Blog::where('status', 'publish')->whereNotNull('video')->take(8)->get();
        $blogPDF = Blog::where('status', 'publish')->whereNotNull('pdf')->take(8)->get();

        // Get distinct topics
        $blogTPC = Blog::where('status', 'publish')->whereNotNull('image')->distinct('topic')->take(5)->get();

        // Function to add created_by_name and format created_at
        $addUserNamesAndFormatDate = function ($blogs) {
            return $blogs->map(function ($blog) {
                $blog->created_by_name = Helpers::getUserNameByUserID($blog->created_by);
                // Format created_at to DD/MM/YYYY for the API response
                $blog->formatted_created_at = $blog->created_at ? $blog->created_at->format('d/m/Y') : null;
                return $blog;
            });
        };

        $blogCMN = BlogComment::select('blog_comments.*', 'blog_comments.userId as created_by',  'user_profiles.profile_picture')
            ->leftJoin('user_profiles', function ($join) {
                $join->on('blog_comments.userId', '=', 'user_profiles.user_id')
                    ->where('user_profiles.status', '=', 'Permanent');
            })
            ->where('blog_comments.blogId', $blogID)
            ->where('blog_comments.showStatus', 'show')
            ->orderBy('blog_comments.created_at', 'DESC')
            ->get();



        return response()->json([
            'status' => '1',
            'blogFND' => $addUserNamesAndFormatDate($blogFND),
            'blogIMG' => $addUserNamesAndFormatDate($blogIMG),
            'blogFTR' => $addUserNamesAndFormatDate($blogFTR),
            'blogVED' => $addUserNamesAndFormatDate($blogVED),
            'blogPDF' => $addUserNamesAndFormatDate($blogPDF),
            'blogTPC' => $addUserNamesAndFormatDate($blogTPC),
            'blogCMN' => $addUserNamesAndFormatDate($blogCMN),
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class PortfolioController extends Controller
{
    //
    public function index($category_1)
    {
        // dd($category_1);
        $portfolio = portfolio::where('status', 'publish')
        ->Where('category_1', 'like', '%' . $category_1 . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);  // Paginate results, showing 10 per page
        // dd($portfolio);

        return view('frontend/portfolio/index')->with(compact('portfolio'));
    }


    public function portfolio_seo()
    {
        // $portfolio = portfolio::where('status', 'publish')
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(10); 


      

        $portfolio = portfolio::where('status', 'publish')
        ->Where('category_1', 'like', '%' . 'Digital_Marketing' . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);  
        // dd($portfolio);

        return view('frontend/portfolio/seo_portfolio')->with(compact('portfolio'));


    }


    public function portfolio_seo_detail($id)
    {
        $portfolio = portfolio::where('status', 'publish')
        ->Where('id', $id)
          ->get(); 

        // dd($portfolio);
        return view('frontend/portfolio/portfolio_seo_detail')->with(compact('portfolio'));
    }


    public function PortfolioForAdmin($category_1)
    {
        // dd($category_1);
        // if (!is_array($category_1)) {
        //     $category_1 = [$category_1];  // Wrap the string in an array
        // }
        // $category_1 = 'Development';

        // Check if the user is authenticated
        if (!Auth::check()) {
            // If not authenticated, redirect to login page
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }

        // Fetch all blogs (you can add further query filters if needed)
        $portfolio = Portfolio::select('id','portfolio_no', 'heading', 'company_name','category_1', 'content', 'image', 'created_at', 'status')
            // ->whereIn('category_1', $category_1)  // Ensure $category_1 is an array
            ->Where('category_1', 'like', '%' . $category_1 . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        // dd($portfolio);
        return view('admin/pages/portfolio/portfolio')->with(compact('portfolio', 'category_1'));
    }




    public function createportfolio()
    {

        // Find the row with the largest Angebots_Nr
        $lastOffer = portfolio::select('portfolio_no')
            ->get()
            ->map(function ($item) {
                // Extract the numeric part from Angebots_Nr
                return (int) Str::after($item->portfolio_no, 'PF-');
            })
            ->max();
        // dd($portfolio);

        if ($lastOffer) {
            $lastOffer = 'PF-' . $lastOffer;
            // $lastOffer = $lastOffer->Angebots_Nr;
            // Assuming $lastOffer is 'AN-12345'
            // $lastOffer = 'AN-12345';

            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];

            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $newPortfolioNo = 'PF-' . $newNumericPart;

            // $newOfferNo will be 'AN-12346'
        } else {
            $newPortfolioNo = 'PF-1234';
        }

        return view('admin/pages/portfolio/creaportfolio')->with(compact('newPortfolioNo'));
    }

    public function createportfolio_seo()
    {
        // Find the row with the largest Angebots_Nr
        $lastOffer = portfolio::select('portfolio_no')
            ->get()
            ->map(function ($item) {
                // Extract the numeric part from Angebots_Nr
                return (int) Str::after($item->portfolio_no, 'PF-');
            })
            ->max();
        // dd($portfolio);

        if ($lastOffer) {
            $lastOffer = 'PF-' . $lastOffer;
            // $lastOffer = $lastOffer->Angebots_Nr;
            // Assuming $lastOffer is 'AN-12345'
            // $lastOffer = 'AN-12345';

            // Split the string into an array based on the dash
            $parts = explode('-', $lastOffer);
            $parts = $parts[1];

            // Increment the numeric part
            $newNumericPart = $parts + 1;

            // Create the new offerNo
            $newPortfolioNo = 'PF-' . $newNumericPart;

            // $newOfferNo will be 'AN-12346'
        } else {
            $newPortfolioNo = 'PF-1234';
        }

        return view('admin/pages/portfolio/creaportfolio_seo')->with(compact('newPortfolioNo'));
    }

    public function portfoliodetail($id)
    {
        $portfolio = portfolio::select()->where('id', $id)->get();

        return view('admin/pages/portfolio/portfoliodetail')->with(compact('portfolio'));
    }

    public function savePortfolioForAdminApi(Request $request)
    {
        // Get the status from the request
        $status = $request->input('status');

        // Base validation rules
        $rules = [
            'portfolio_no' => 'required',
            'category_1' => 'required',
            'category_2' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'nullable|string|in:save,publish',
        ];


        if ($request->page_type != 'update') {
            $rules = array_merge($rules, [
                'portfolio_no' => 'required|unique:portfolio,portfolio_no',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        }

      
        // Validate the incoming data
        $validatedData = $request->validate($rules);

        // Get the authenticated user
        $user = Auth::user();

        // Check and delete existing portfolio if it exists
        $existingPortfolio = portfolio::where('portfolio_no', $request->portfolio_no)->first();
        if ($existingPortfolio) {
            portfolio::where('portfolio_no', $request->portfolio_no)->delete();
        }
        $imagePath = $existingPortfolio?->image ?? null;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/portfolio'), $imageName);
            $imagePath = 'backend/portfolio/' . $imageName;
        }


        foreach ($request->input('inputs') as $dynamicField) {
            portfolio::create([
                'portfolio_no' => $request->portfolio_no,
                'category_1' => $request->category_1,
                'category_2' => $request->category_2,
                'image' => $imagePath,
                'heading' => $request->heading,
                'content' => $request->content,
                'company_name' => $request->company_name,
                'status' => $status,
                'created_by' => $user->id,
                
            ]);
        }

        // Return success response
        return response()->json([
            'success' => 'Portfolio ' . ($status === 'publish' ? 'published' : 'saved') . ' successfully!',
        ]);
    }


    public function savePortfolioForAdminApi_seo(Request $request)
    {

        // dd($request->all());
     
        // Get the status from the request
        $status = $request->input('status');
    
        // Base validation rules
        $rules = [
            'portfolio_no' => 'required',
            'category_2' => 'required',
            'heading' => 'required|string|max:255',
            'company_name' => 'required|string',
            'industry' => 'required|string',
            'content_0' => 'required|max:2000',
            'content_1' => 'required|max:2000',
            'content_2' => 'required|max:2000',
            'status' => 'nullable|string|in:save,publish',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image_start' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'image_final' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    
        // Add unique validation for 'portfolio_no' when not updating
        if ($request->page_type != 'update') {
            $rules['portfolio_no'] = 'required|unique:portfolio,portfolio_no';
        }
    
        // Validate the incoming data
        $validatedData = $request->validate($rules);
    
        // Get the authenticated user
        $user = Auth::user();
    
        // Check if portfolio exists (for update scenario)
        $existingPortfolio = portfolio::where('portfolio_no', $request->portfolio_no)->first();
    
        // Handle Image Uploads (only if new files are uploaded)
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('backend/portfolio'), $imageName);
            $imagePath = 'backend/portfolio/' . $imageName;
        } else {
            $imagePath = $existingPortfolio ? $existingPortfolio->image : null;
        }
    
        if ($request->hasFile('image_start')) {
            $imageNameStart = time() . '-' . uniqid() . '.' . $request->file('image_start')->getClientOriginalExtension();
            $request->file('image_start')->move(public_path('backend/portfolio'), $imageNameStart);
            $imagePath_start = 'backend/portfolio/' . $imageNameStart;
        } else {
            $imagePath_start = $existingPortfolio ? $existingPortfolio->image_start : null;
        }
    
        if ($request->hasFile('image_final')) {
            $imageNameFinal = time() . '-' . uniqid() . '.' . $request->file('image_final')->getClientOriginalExtension();
            $request->file('image_final')->move(public_path('backend/portfolio'), $imageNameFinal);
            $imagePath_final = 'backend/portfolio/' . $imageNameFinal;
        } else {
            $imagePath_final = $existingPortfolio ? $existingPortfolio->image_final : null;
        }
    
        // If this is a new portfolio, create a new record; otherwise, update existing
        if ($existingPortfolio) {
            $existingPortfolio->update([
                'category_1' => $request->category_1,
                'category_2' => $request->category_2,
                'image' => $imagePath,
                'image_start' => $imagePath_start,
                'image_final' => $imagePath_final,
                'heading' => $request->heading,
                'content' => $request->content_0,
                'content_start' => $request->content_1,
                'content_final' => $request->content_2,
                'company_name' => $request->company_name,
                'industry' => $request->industry,

                'status' => $status,
                'created_by' => $user->id,
            ]);
            $message = 'Portfolio updated successfully!';
        } else {
            portfolio::create([
                'portfolio_no' => $request->portfolio_no,
                'category_1' => $request->category_1,
                'category_2' => $request->category_2,
                'image' => $imagePath,
                'image_start' => $imagePath_start,
                'image_final' => $imagePath_final,
                'heading' => $request->heading,
                'content' => $request->content_0,
                'content_start' => $request->content_1,
                'content_final' => $request->content_2,
                'company_name' => $request->company_name,
                'industry' => $request->industry,

                'status' => $status,
                'created_by' => $user->id,
            ]);
            $message = 'Portfolio saved successfully!';
        }
    
        // Return success response
        return response()->json([
            'success' => $message . ' ' . ($status === 'publish' ? 'and published' : ''),
        ]);
    }
    
    




    public function deletePortfolioForAdminApi(Request $request, $id, $category_1)
    {

        // dd($request->all());
        $deletedBlog = portfolio::where('id', $id)->delete();

        if ($deletedBlog) {
            $request->session()->flash('success', 'Portfolio Deleted Successfully');
        } else {
            $request->session()->flash('error', 'Portfolio Not Deleted');
        }

         // Return redirect to the portfolio page based on the category
    return redirect()->route('PortfolioForAdmin', ['category_1' => $category_1]);
    }


    public function editPortfolioForAdmin_Development(Request $request, $id,)
    {

        $Blogs = portfolio::select()->where('portfolio_no', $id)->get();

        if (count($Blogs)) {
            $newPortfolioNo = $id;
            return view('admin/pages/portfolio/editPortfolio_developemnt')->with(compact('Blogs', 'newPortfolioNo'));
        } else {
            echo 'Inccorect Pertfolio ID';
        }
    }


    public function editPortfolioForAdmin_Digital_Marketing(Request $request, $id,)
    {

        $Blogs = portfolio::select()->where('portfolio_no', $id)->get();
        // dd($Blogs);
        if (count($Blogs)) {
            $newPortfolioNo = $id;
            return view('admin/pages/portfolio/editPortfolio_Digital_Marketing')->with(compact('Blogs', 'newPortfolioNo'));
        } else {
            echo 'Inccorect Pertfolio ID';
        }
    }




    public function updatePortfolioForAdminApi(Request $request)
    {

        // dd($request->all());
        $status = $request->input('action');
        // dd($status);
        // $user = Auth::guard('api')->user();

        // // Check if the user is authorized (Admin or B2B)
        // if (!in_array($user->role, ['Admin', 'b2b'])) {
        //     return response()->json(['status' => '0', 'message' => 'Unauthorized users']);
        // }

        // // Check if the request is AJAX
        // if (!$request->ajax()) {
        //     return response()->json(['message' => 'Invalid request'], 400);
        // }

        // Validate the incoming data
        $validatedData = $request->validate([
            'blogId' => 'required',
            'company_name' => 'required|string',
            'heading' => 'required|string|max:255',
            'content' => 'required|string|max:100000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',

            'action' => 'nullable|string|in:save,publish', // Optional: if you want to differentiate between save and publish
        ]);



        $id = $validatedData['blogId'];
        // Find the blog for the given id created by the user
        $blog = portfolio::where('id', $id)->first();

        if (!$blog) {
            return response()->json(['status' => '0', 'message' => 'Portfolio not found!']);
        }

        // Initialize file paths
        $imageRelativePath = $blog->image;


        // Handle Image Upload (delete old file if new image is uploaded)
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();

            // Save the image to the 'public/backend/portfolio' directory
            // $imagePath = $request->file('image')->storeAs('public/backend/portfolio', $imageName);

            $imagePath = $request->file('image')->move(public_path('backend/portfolio'), $imageName);

            // The 'storeAs' method returns the relative path, e.g., 'public/backend/portfolio/1733316243.png'
            // Now we need to get the relative path without the "public" directory.
            $imageRelativePath = 'backend/portfolio/' . $imageName;
        }



        // dd($validatedData['action']);
        // Update blog fields
        $blog->update([
            'company_name' => $validatedData['company_name'],
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
            'image' => $imageRelativePath,

            'status' => $validatedData['action'] ?? 'save', // Default to 'save' if not provided
        ]);


        // Store success message in session
        session()->flash('success', 'Portfolio ' . ($status == 'publish' ? 'published' : 'saved') . ' successfully!');

        // Optionally, return the blog ID or any other data if needed
        return redirect()->to('editPortfolioForAdmin/' . $id); // Redirect to the blogs index page or your desired page
    }
}

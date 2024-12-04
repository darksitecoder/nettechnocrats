<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        return view('frontend/portfolio/index');
    }


    public function PortfolioForAdmin(Request $request)
    {
           // Check if the user is authenticated
           if (!Auth::check()) {
            // If not authenticated, redirect to login page
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }

        // Fetch all blogs (you can add further query filters if needed)
        $portfolio = portfolio::select('*')->orderby('created_at', 'desc')->get();
        // dd($blogs);

        // Return the view with the list of blogs
        return view('admin/pages/portfolio/portfolio')->with(compact('portfolio'));

    }
    public function createportfolio()
    {
        return view('admin/pages/portfolio/creaportfolio');
    }
    public function portfoliodetail()
    {
        return view('admin/pages/portfolio/portfoliodetail');
    }

    public function savePortfolioForAdminApi(Request $request)
    {

     
        $status = $request->input('status');
       
        // Validate the incoming data
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'heading' => 'required|string|max:255',
            'company_name' => 'required|string',
            'content' => 'required|string|max:100000',
            'status' => 'nullable|string|in:save,publish',
        ]);
        
        // dd($request->all());
        $user = Auth::user(); // Get the authenticated user
        
        // dd($user);
        // Initialize file paths
        $imagePath = null;
    

        
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolio/images', 'public');
        }
       
        // Create the blog entry
        $blog = portfolio::create([
       
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
            'company_name' => $validatedData['company_name'],
            'image' => $imagePath,
            'status' => $status, 
            'created_by' => $user->id
        ]);
    
        // Store success message in session
        session()->flash('success', 'Portfolio ' . ($status == 'Published' ? 'Published' : 'saved') . ' successfully!');

        // Optionally, return the blog ID or any other data if needed
        return redirect()->route('createportfolio'); // Redirect to the blogs index page or your desired page
    }

    public function deletePortfolioForAdminApi(Request $request, $id)
    {

        $deletedBlog = portfolio::where('id', $id)->delete();

        if ($deletedBlog) {
            $request->session()->flash('success', 'Portfolio Deleted Successfully');
        } else {
            $request->session()->flash('error', 'Portfolio Not Deleted');
        }
    
        // Return response (redirect to the same page)
        return redirect()->to('PortfolioForAdmin');
    }


    public function editPortfolioForAdmin(Request $request, $id, )
    {
       

        $Blogs = portfolio::select()->where('id', $id)->get();
        return view('admin/pages/portfolio/editPortfolio')->with(compact('Blogs'));
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
        $imagePath = $blog->image;
     

        // Handle Image Upload (delete old file if new image is uploaded)
        if ($request->hasFile('image')) {
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);  // Delete the old image
            }
            $imagePath = $request->file('image')->store('blogs/images', 'public');
        }

       

        // dd($validatedData['action']);
        // Update blog fields
        $blog->update([
            'company_name' => $validatedData['company_name'],
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
            
            'status' => $validatedData['action'] ?? 'save', // Default to 'save' if not provided
        ]);

       
        // Store success message in session
        session()->flash('success', 'Portfolio ' . ($status == 'Published' ? 'Published' : 'saved') . ' successfully!');

        // Optionally, return the blog ID or any other data if needed
        return redirect()->to('editPortfolioForAdmin/' . $id); // Redirect to the blogs index page or your desired page
    }

}

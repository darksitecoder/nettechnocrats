<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        return view('frontend/portfolio/index');
    }


    public function PortfolioForAdmin()
    {
        return view('admin/pages/portfolio/portfolio');
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
        $status = $request->input('action');
        // dd($status);
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
        $videoPath = null;
        $pdfPath = null;

        
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs/images', 'public');
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
            'heading' => $validatedData['heading'],
            'content' => $validatedData['content'],
            'image' => $imagePath,
            'video' => $videoPath,
            'pdf' => $pdfPath,
            'status' => $status, 
            'created_by' => $user->id
        ]);
    
        // Store success message in session
        session()->flash('success', 'Blog ' . ($status == 'Published' ? 'Published' : 'saved') . ' successfully!');

        // Optionally, return the blog ID or any other data if needed
        return redirect()->route('AddBlogsForAdmin'); // Redirect to the blogs index page or your desired page
    }
}

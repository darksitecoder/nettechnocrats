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
    public function index()
    {
        $portfolio = portfolio::where('status', 'publish')
            ->orderBy('created_at', 'desc')
            ->paginate(10);  // Paginate results, showing 10 per page
            // dd($portfolio);

        return view('frontend/portfolio/index')->with(compact('portfolio'));
    }


    public function portfolio_seo()
    {
        // $portfolio = portfolio::where('status', 'publish')
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(10); 

        return view('frontend/portfolio/seo_portfolio');
    }


    public function portfolio_seo_detail()
    {
        // $portfolio = portfolio::where('status', 'publish')
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(10); 

        return view('frontend/portfolio/portfolio_seo_detail');
    }


    public function PortfolioForAdmin(Request $request)
    {

        // Check if the user is authenticated
        if (!Auth::check()) {
            // If not authenticated, redirect to login page
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }
        // dd('$portfolio');

        // Fetch all blogs (you can add further query filters if needed)
        $portfolio = portfolio::select('portfolio_no', 'heading', 'company_name', 'content', 'image', 'created_at', 'status')
            ->whereIn(
                'id',
                portfolio::select(DB::raw('MAX(id) as id'))
                    ->groupBy('portfolio_no')
                    ->pluck('id')
            )
            ->orderBy('created_at', 'desc')
            ->get();

        // dd($portfolio);

        // Return the view with the list of blogs
        return view('admin/pages/portfolio/portfolio')->with(compact('portfolio'));
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

        // Add additional validation rules based on category_1
        if ($request->category_1 == 'Digital_Marketing') {
            $rules = array_merge($rules, [
                'inputs' => 'required|array',
                'inputs.*.POS' => 'required|numeric|min:1',
                'inputs.*.Keywords' => 'required|string|max:255',
                'inputs.*.RatingBefore' => 'required|numeric|min:0',
                'inputs.*.RatingAfter' => 'required|numeric|min:0',
            ]);
        } else {
            $rules = array_merge($rules, [
                'heading' => 'required|string|max:255',
                'company_name' => 'required|string',
                'content' => 'required|string|max:100000',
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
                'POS' => $dynamicField['POS'],
                'Keywords' => $dynamicField['Keywords'],
                'RatingBefore' => $dynamicField['RatingBefore'],
                'RatingAfter' => $dynamicField['RatingAfter'],
            ]);
        }

        // Return success response
        return response()->json([
            'success' => 'Portfolio ' . ($status === 'publish' ? 'published' : 'saved') . ' successfully!',
        ]);
    }

    public function deletePortfolioForAdminApi(Request $request, $id)
    {

        $deletedBlog = portfolio::where('portfolio_no', $id)->delete();

        if ($deletedBlog) {
            $request->session()->flash('success', 'Portfolio Deleted Successfully');
        } else {
            $request->session()->flash('error', 'Portfolio Not Deleted');
        }

        // Return response (redirect to the same page)
        return redirect()->to('PortfolioForAdmin');
    }


    public function editPortfolioForAdmin(Request $request, $id,)
    {

        $Blogs = portfolio::select()->where('portfolio_no', $id)->orderby('POS', 'ASC')->get();
        if (count($Blogs)) {
            $newPortfolioNo = $id;
            return view('admin/pages/portfolio/editPortfolio')->with(compact('Blogs', 'newPortfolioNo'));
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

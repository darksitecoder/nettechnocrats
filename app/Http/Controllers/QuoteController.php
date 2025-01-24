<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote; // Assume you have a model for saving quotes

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'website' => 'required|url'
        ]);

        // Save to the database
        Quote::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website
        ]);

        return response()->json(['message' => 'Your request has been submitted successfully!'], 200);
    }


    public function list(Request $request)
    {
        $enquiry = Quote::orderby('created_at', 'desc')->get();
        return view('admin/pages/enquires/quoteList', compact('enquiry'));
    }   
    
    
    public function delete(Request $request, $id)
    {
        $deletedQuote = Quote::where('id', $id)->delete();
        if ($deletedQuote) {
            $request->session()->flash('success', "Quote enquiry ID - $id deleted successfully");
        } else {
            $request->session()->flash('error', "Quote enquiry ID - $id not deleted");
        }
    
        // Return response (redirect to the same page)
        return redirect()->back();
    }
}

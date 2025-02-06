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
            'website' => 'required'
        ]);

        // Save to the database
        $save = Quote::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website
        ]);


        if ($save) {
            // Send email via SMTP
            try {
                $emailData = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'website' => $request->website
                ];
    
                \Mail::send('emails.quote_enquiry', $emailData, function ($message) use ($request) {
                    $message->to('sales@nettechnocrats.com')
                            ->subject('New Quotation Enquiry Recieved')
                            ->from($request->email, $request->name);
                }); 
    
                return response()->json(['message' => 'Your request has been submitted successfully!'], 200);

            } catch (\Exception $e) {
                return response()->json(['error' => 'Email not sent: ' . $e->getMessage()], 500);
            }
        }
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

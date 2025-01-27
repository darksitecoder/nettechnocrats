<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    // Store a newly created proposal in the database
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
        ]);

        // Create a new proposal entry in the database
        $save = Proposal::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ]);


        if ($save) {
            // Send email via SMTP
            try {
                $emailData = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                ];
    
                \Mail::send('emails.proposal_enquiry', $emailData, function ($message) use ($request) {
                    $message->to('support@nettechnocrats.com')
                            ->subject('New Proposal Enquiry Recieved')
                            ->from($request->email, $request->name);
                }); 
    
                // Redirect back with a success message
                return back()->with('success', 'Proposal submitted successfully!');

            } catch (\Exception $e) {
                return response()->json(['error' => 'Email not sent: ' . $e->getMessage()], 500);
            }
        }
    }


    public function list(Request $request)
    {
        $enquiry = Proposal::orderby('created_at', 'desc')->get();
        return view('admin/pages/enquires/proposalList', compact('enquiry'));
    }   
    
    
    public function delete(Request $request, $id)
    {
        $deletedProposal = Proposal::where('id', $id)->delete();
        if ($deletedProposal) {
            $request->session()->flash('success', "Proposal enquiry ID - $id deleted successfully");
        } else {
            $request->session()->flash('error', "Proposal enquiry ID - $id not deleted");
        }
    
        // Return response (redirect to the same page)
        return redirect()->back();
    }
}
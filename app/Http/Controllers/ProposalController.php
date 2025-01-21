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
        Proposal::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Proposal submitted successfully!');
    }
}

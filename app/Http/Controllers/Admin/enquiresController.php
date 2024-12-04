<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class enquiresController extends Controller
{

    public function listEnquiriesForAdmin()
    {
        $enquiry = Enquiry::orderby('created_at', 'desc')->get();
        return view('admin/pages/enquires/enquiresList', compact('enquiry'));
    }

    public function listContactEnquiriesForAdmin()
    {
        return view('admin/pages/enquires/ContactEnquiresList');
    }

    public function enquiryFormSubmit(Request $request)
    {
        // dd($request->all());

        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the enquiry into the database
        $save =  Enquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        if ($save) {
            echo 'OK';
        }
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\contact_enquiry;

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


    public function contact_enquiryFormSubmit(Request $request)
    {
       // Validate the form data
       $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'company_size' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'company_website' => 'required|url|max:255',
        'project_title' => 'required|string|max:255',
        'requirement' => 'required|string',
    ]);

    // Save the enquiry data into the database
    $save =  contact_enquiry::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'country' => $request->country,
        'company_size' => $request->company_size,
        'company_name' => $request->company_name,
        'company_website' => $request->company_website,
        'project_title' => $request->project_title,
        'requirement' => $request->requirement,
    ]);

    if ($save) {
        echo 'OK';
    }
}
}

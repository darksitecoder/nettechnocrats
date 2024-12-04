<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class enquiresController extends Controller
{
    
    public function listEnquiriesForAdmin(){
        return view('admin/pages/enquires/enquiresList');
    }

    public function listContactEnquiriesForAdmin(){
        return view('admin/pages/enquires/ContactEnquiresList');
    }

    public function enquiryFormSubmit(Request $request){

        // dd($request->all());
     
            // Validate the form data
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);
    
            // Save the enquiry into the database
          $save=  Enquiry::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            if($save){
                echo 'OK';
                // return response()->json(['success'=>'Enquiry Send successfully']);
            }
         
    
            // Set a success message in the session
            // return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
   

        }

    
}

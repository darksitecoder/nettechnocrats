<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class enquiresController extends Controller
{
    
    public function listEnquiriesForAdmin(){
        return view('admin/pages/enquires/enquiresList');
    }
    
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function dashboard(){
    //     return view('admin.dashboard');
    // }

    public function admin_dashboard(){
        return view('admin/pages/admin_dashboard/dashboard');
    }


}

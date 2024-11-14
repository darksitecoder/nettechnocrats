<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminportfolioController extends Controller
{
    public function portfolio(){
        return view('admin/pages/portfolio/portfolio');
    }
}

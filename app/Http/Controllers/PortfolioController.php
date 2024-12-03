<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        return view('frontend/portfolio/index');
    }


    public function PortfolioForAdmin()
    {
        return view('admin/pages/portfolio/portfolio');
    }
}

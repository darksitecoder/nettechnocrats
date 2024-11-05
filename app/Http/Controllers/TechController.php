<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechController extends Controller
{
    public function index()
    {
        return view('frontend.tech.tech');
    }

    public function asp()
    {
        return view('frontend.asp.asp-net-development');
    }
}

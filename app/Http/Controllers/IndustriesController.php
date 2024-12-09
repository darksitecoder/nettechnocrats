<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    //
    public function index()
    {
        return view('frontend.industries.index');
    }
    public function vendor()
    {
        return view('frontend.industries.vendor');
    }
    public function affiliate()
    {
        return view('frontend.industries.affiliate');
    }
    public function demand()
    {
        return view('frontend.industries.demand');
    }
    public function taxi()
    {
        return view('frontend.industries.taxi');
    }
    public function job()
    {
        return view('frontend.industries.job');
    }
    public function delivery()
    {
        return view('frontend.industries.delivery');
    }
    public function realestate()
    {
        return view('frontend.industries.realestate');
    }
    public function lamb()
    {
        return view('frontend.industries.lamb');
    }
    public function socialmedia()
    {
        return view('frontend.industries.socialmedia');
    }
    public function ott()
    {
        return view('frontend.industries.ott');
    }
    public function education()
    {
        return view('frontend.industries.education');
    }
    public function travel()
    {
        return view('frontend.industries.travel');
    }
}

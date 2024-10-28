<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalMarketingController extends Controller
{

    public function index1()
    {
        // dd('hello');
        return view('frontend.digital-marketing.digitalmarketing');
    }

    public function index()
    {
        return view('frontend.digital-marketing.digitalmarketing');
    }



    public function seo()
    {
        return view('frontend.digital-marketing.seo');
    }
    public function smo()
    {
        return view('frontend.digital-marketing.smo');
    }
    public function ppc()
    {
        return view('frontend.digital-marketing.ppc');
    }
    public function local()
    {
        return view('frontend.digital-marketing.local');
    }
    public function orm()
    {
        return view('frontend.digital-marketing.orm');
    }

    public function aboutus()
    {

        return view('frontend/new/aboutus');
    }
}

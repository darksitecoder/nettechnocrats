<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalMarketingController extends Controller
{
    public function index()
    {
        return view('frontend.digital-marketing.digitalmarketing');
    }



    public function seo()
    {
        return view('frontend.digital-marketing.seo');
    }
}

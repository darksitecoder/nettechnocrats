<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;

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
        $datas = portfolio::where('category_2', 'SEO')->get();
        // dd($datas);
        return view('frontend.digital-marketing.seo', compact('datas'));
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

    public function healthcare()
    {
        return view('frontend.digital-marketing.healthcare');
    }
    public function limoseo()
    {
        return view('frontend.digital-marketing.limoseo');
    }
    public function lawseo()
    {
        return view('frontend.digital-marketing.lawseo');
    }
    public function ecommerce()
    {
        return view('frontend.digital-marketing.ecommerce');
    }
}

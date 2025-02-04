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
        return view('frontend.digital-marketing.digital-marketing');
    }



    public function seo()
    {
        $datas = portfolio::where('category_2', 'SEO')->get();
        return view('frontend.digital-marketing.seo', compact('datas'));
    }

    public function smo()
    {
        $datas = portfolio::where('category_2', 'SMO')->get();
        return view('frontend.digital-marketing.smo', compact('datas'));
    }

    public function ppc()
    {
        $datas = portfolio::where('category_2', 'PPC')->get();
        return view('frontend.digital-marketing.ppc', compact('datas'));
    }

    public function local()
    {
        $datas = portfolio::where('category_2', 'Local SEO')->get();
        return view('frontend.digital-marketing.local', compact('datas'));
    }

    public function orm()
    {
        $datas = portfolio::where('category_2', 'ORM')->get();
        return view('frontend.digital-marketing.orm', compact('datas'));
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

    public function pagenotfound()
    {
        return view('frontend.tech.404');
    }
}

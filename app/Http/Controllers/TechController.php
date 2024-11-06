<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechController extends Controller
{
    public function tech()
    {
        return view('frontend.tech.tech');
    }

    public function asp()
    {

        return view('frontend/tech/asp');
    }
    public function csharp()
    {
        // echo 'hello';
        return view('frontend/tech/csharp');
    }
    public function sharepoint()
    {
        return view('frontend/tech/sharepoint');
    }
    public function php()
    {
        return view('frontend/tech/php');
    }
    public function zend()
    {
        return view('frontend/tech/zend');
    }
    public function lamp()
    {
        return view('frontend/tech/lamp');
    }
    public function codeigniter()
    {
        return view('frontend/tech/codeigniter');
    }
    public function microsoftcrm()
    {
        return view('frontend/tech/microsoftcrm');
    }
    public function salesforce()
    {
        return view('frontend/tech/salesforce');
    }
    public function android()
    {
        return view('frontend/tech/android');
    }
    public function iphone()
    {
        return view('frontend/tech/iphone');
    }
    public function swift()
    {
        return view('frontend/tech/swift');
    }
    public function wearable()
    {
        return view('frontend/tech/wearable');
    }
    public function nodejs()
    {
        return view('frontend/tech/nodejs');
    }
    public function angular()
    {
        return view('frontend/tech/angular');
    }
}

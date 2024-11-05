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
}

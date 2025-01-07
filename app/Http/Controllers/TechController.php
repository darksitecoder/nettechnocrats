<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;

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
    public function laravel()
    {
        return view('frontend/tech/laravel');
    }
    public function codeigniter()
    {
        return view('frontend/tech/codeigniter');
    }

    public function microsoftcrm()
    {
        $datas = portfolio::where('category_2', 'CRM Development')->get();
        return view('frontend/tech/microsoftcrm', compact('datas'));
    }

    public function salesforce()
    {
        $datas = portfolio::where('category_2', 'Salesforce Development')->get();
        return view('frontend/tech/salesforce', compact('datas'));
    }

    public function android()
    {
        return view('frontend/tech/android');
    }
    public function iphone()
    {
        return view('frontend/tech/ios');
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
        return view('frontend/tech/node');
    }
    public function angular()
    {
        return view('frontend/tech/angular');
    }

    public function wordpress()
    {
        $datas = portfolio::where('category_2', 'WordPress')->get();
        return view('frontend/tech/wordpress', compact('datas'));
    }

    public function magento()
    {
        $datas = portfolio::where('category_2', 'Magento')->get();
        return view('frontend/tech/magento', compact('datas'));
    }

    public function joomla()
    {
        $datas = portfolio::where('category_2', 'SMO')->get();
        return view('frontend/tech/joomla' ,compact('datas'));
    }
    public function python()
    {
        $datas = portfolio::where('category_2', 'Python')->get();
        return view('frontend/tech/python', compact('datas'));
    }
    public function cloud()
    {
        return view('frontend/tech/cloud');
    }
    public function bigdata()
    {
        return view('frontend/tech/bigdata');
    }
    public function chatbot()
    {
        return view('frontend/tech/chatbot');
    }
    public function ibeacon()
    {
        return view('frontend/tech/ibeacon');
    }


    public function iot()
    {
        $datas = portfolio::where('category_2', 'Iot')->get();
        return view('frontend/tech/iot', compact('datas'));
    }

    public function blockchain()
    {
        return view('frontend/tech/blockchain');
    }
    public function datascience()
    {
        return view('frontend/tech/datascience');
    }
    public function ai()
    {
        return view('frontend/tech/ai');
    }

    public function drupal()
    {
        $datas = portfolio::where('category_2', 'Drupal')->get();
        return view('frontend/tech/drupal', compact('datas'));
    }

    public function wallet()
    {
        return view('frontend/tech/e-wallet-app-development');
    }

    public function uiux()
    {
        $datas = portfolio::where('category_2', 'UI/UX/Product Design')->get();
        return view('frontend/tech/uiux', compact('datas'));
    }

    public function about()
    {
        return view('frontend/tech/about');
    }
    public function client()
    {
        return view('frontend/tech/client');
    }
    public function contact()
    {
        return view('frontend/contact');
    }
    public function bloglist()
    {
        return view('frontend.bloglist');
    }
    public function blogdetail()
    {
        return view('frontend/blogdetail');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\TechController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/digital-marketing', [DigitalMarketingController::class, 'digitalMarketing']);

Route::get('/tech', [TechController::class, 'tech']);

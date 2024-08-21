<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/digital-marketing', [DigitalMarketingController::class, 'digitalMarketing']);

Route::get('/tech', [TechController::class, 'tech']);


Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
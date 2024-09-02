<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/digital-marketing', [DigitalMarketingController::class, 'index']);
Route::get('/tech', [TechController::class, 'index']);
Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);


Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
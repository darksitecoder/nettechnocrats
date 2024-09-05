<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('frontend.home');
// });


Route::get('/digital-marketing', [DigitalMarketingController::class, 'index']);
Route::get('/tech', [TechController::class, 'index']);
Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);

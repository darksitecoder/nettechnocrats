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


Route::get('/', function () {
    return view('frontend.home');
});

// Route::get('/', [DigitalMarketingController::class, 'index1']);
Route::get('/digital-marketing', [DigitalMarketingController::class, 'index']);
Route::get('/tech', [TechController::class, 'tech']);
Route::get('/asp-net-development', [TechController::class, 'asp']);
Route::get('/c-sharp-development', [TechController::class, 'csharp']);
Route::get('/share-point', [TechController::class, 'sharepoint']);


Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);


Route::get('/seo-services', [DigitalMarketingController::class, 'seo']);
Route::get('/smo-services', [DigitalMarketingController::class, 'smo']);
Route::get('/ppc-services', [DigitalMarketingController::class, 'ppc']);
Route::get('/local-seo-services', [DigitalMarketingController::class, 'local']);
Route::get('/online-reputation-management', [DigitalMarketingController::class, 'orm']);

Route::get('/about', [DigitalMarketingController::class, 'aboutus']);

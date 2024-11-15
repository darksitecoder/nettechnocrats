<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalMarketingController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\backend\dashboardController as BackendDashboardController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Admin\AdminportfolioController;
use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\BlogCommentController;
use App\Http\Controllers\Admin\BlogTopicController;


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
Route::get('/php-development', [TechController::class, 'php']);
Route::get('/zend-development', [TechController::class, 'zend']);
Route::get('/lamp-development', [TechController::class, 'lamp']);
Route::get('/laravel-development', [TechController::class, 'laravel']);
Route::get('/codeigniter-development', [TechController::class, 'codeigniter']);
Route::get('/microsoft-dynamic-crm', [TechController::class, 'microsoftcrm']);
Route::get('/salesforce-development', [TechController::class, 'salesforce']);
Route::get('/android-app-development', [TechController::class, 'android']);
Route::get('/iphone-ios-development-company', [TechController::class, 'iphone']);
Route::get('/swift-platform-development', [TechController::class, 'swift']);
Route::get('/wearable-app-development', [TechController::class, 'wearable']);
Route::get('/nodejs-development', [TechController::class, 'nodejs']);
Route::get('/angular-js-development', [TechController::class, 'angular']);
Route::get('/wordpress-development-services', [TechController::class, 'wordpress']);
Route::get('/magento-web-development', [TechController::class, 'magento']);
Route::get('/joomla-web-development', [TechController::class, 'joomla']);
Route::get('/drupal-web-development', [TechController::class, 'drupal']);

Route::get('/python-django-development-company', [TechController::class, 'python']);
Route::get('/cloud-computing', [TechController::class, 'cloud']);
Route::get('/big-data-analytics', [TechController::class, 'bigdata']);
Route::get('/chatbot-development-company', [TechController::class, 'chatbot']);
Route::get('/ibeacon-app-development-company', [TechController::class, 'ibeacon']);
Route::get('/iot-applications-development-company', [TechController::class, 'iot']);
Route::get('/blockchain-application-development-company', [TechController::class, 'blockchain']);
Route::get('/data-science', [TechController::class, 'datascience']);
Route::get('/ai-application-development-company', [TechController::class, 'ai']);


Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);


Route::get('/seo-services', [DigitalMarketingController::class, 'seo']);
Route::get('/smo-services', [DigitalMarketingController::class, 'smo']);
Route::get('/ppc-services', [DigitalMarketingController::class, 'ppc']);
Route::get('/local-seo-services', [DigitalMarketingController::class, 'local']);
Route::get('/online-reputation-management', [DigitalMarketingController::class, 'orm']);

Route::get('/about', [DigitalMarketingController::class, 'aboutus']);


Route::get('/login_page', [logincontroller::class, 'login_page'])->name('login');
Route::get('/login', [logincontroller::class, 'login']);


Route::post('/logout', [logincontroller::class, 'destroy'])->name('logout');

Route::post('/credentials_check', [logincontroller::class, 'credentials_check']);
Route::get('/register', [logincontroller::class, 'register']);
Route::post('/signup', [logincontroller::class, 'signup']);
// Route::get('/admin_dashboard', [DashboardController::class, 'admin_dashboard']); 

Route::get('/portfolio', [AdminportfolioController::class, 'portfolio']);

// Route::get('/blog', [blogController::class, 'blog']);



Route::get('/e-wallet-app-development', [TechController::class, 'wallet']);
Route::get('/ui-ux-design-services', [TechController::class, 'uiux']);

Route::middleware(['auth'])->group(function () {
    // Protected route for the admin dashboard
    Route::get('/admin_dashboard', [DashboardController::class, 'admin_dashboard']);
});
// for blog topic
Route::post('addBlogTopicApi', [BlogTopicController::class, 'save']);
Route::get('fetchBlogTopicApi', [BlogTopicController::class, 'fetch']);
Route::get('deleteBlogTopicApi', [BlogTopicController::class, 'delete']);


// for blogs
Route::get('listBlogsForAdminApi', [blogController::class, 'listBlogsForAdminApi']);
Route::get('deleteBlogsForAdminApi/{id}', [blogController::class, 'deleteBlogsForAdminApi']);
Route::get('editBlogsForAdminApi/{id}', [blogController::class, 'editBlogsForAdminApi']);
Route::post('saveBlogsForAdminApi', [blogController::class, 'saveBlogsForAdminApi']);
Route::get('fetchBlogDetailsApi/{id}', [blogController::class, 'fetchBlogDetailsApi']);
Route::post('updateBlogsForAdminApi', [blogController::class, 'updateBlogsForAdminApi']);


// Blogs for Admin
Route::get('listBlogsForAdmin', [blogController::class, 'listBlogsForAdmin']);
Route::get('AddBlogsForAdmin/{role}', [blogController::class, 'AddBlogsForAdmin']);
Route::get('BlogsForAdmin/{role}', [blogController::class, 'AddBlogsForAdmin']);
Route::get('editBlogsForAdmin/{id}/{encryptedUserId}', [blogController::class, 'editBlogsForAdmin']);
Route::get('blogTopics/{role}', [BlogTopicController::class, 'blogTopics']);


// Blogs comments
Route::get('blogComments/{role}', [BlogCommentController::class, 'blogComments']);

// for users blog
Route::get('listBlogsForUsersApi', [blogController::class, 'listBlogsForUsersApi']);
Route::get('blogDetailsForUsersApi/{blogID}/{b2b_id?}', [blogController::class, 'blogDetailsForUsersApi']);


// blogs for Admin

Route::get('/blogs/{shop_id?}', [blogController::class, 'blogs']);
Route::get('blogDetails/{id}/{shop_id?}', [blogController::class, 'blogDetails']);

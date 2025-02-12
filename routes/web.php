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
use App\Http\Controllers\Admin\enquiresController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\QuoteController;



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


Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/digital-marketing.php', [DigitalMarketingController::class, 'index']);
Route::get('/tech.php', [TechController::class, 'tech']);
Route::get('/asp-net-development.php', [TechController::class, 'asp']);
Route::get('/c-sharp-development.php', [TechController::class, 'csharp']);
Route::get('/share-point.php', [TechController::class, 'sharepoint']);
Route::get('/php-development.php', [TechController::class, 'php']);
Route::get('/zend-development.php', [TechController::class, 'zend']);
Route::get('/lamp-development.php', [TechController::class, 'lamp']);
Route::get('/laravel-development.php', [TechController::class, 'laravel']);
Route::get('/codeigniter-development.php', [TechController::class, 'codeigniter']);
Route::get('/microsoft-dynamic-crm.php', [TechController::class, 'microsoftcrm']);
Route::get('/salesforce-development.php', [TechController::class, 'salesforce']);
Route::get('/android-app-development.php', [TechController::class, 'android']);
Route::get('/iphone-ios-development-company.php', [TechController::class, 'iphone']);
Route::get('/swift-platform-development.php', [TechController::class, 'swift']);
Route::get('/wearable-app-development.php', [TechController::class, 'wearable']);
Route::get('/nodejs-development.php', [TechController::class, 'nodejs']);
Route::get('/angular-js-development.php', [TechController::class, 'angular']);
Route::get('/wordpress-development-services.php', [TechController::class, 'wordpress']);
Route::get('/magento-web-development.php', [TechController::class, 'magento']);
Route::get('/joomla-web-development.php', [TechController::class, 'joomla']);
Route::get('/drupal-web-development.php', [TechController::class, 'drupal']);

Route::get('/python-django-development-company.php', [TechController::class, 'python']);
Route::get('/cloud-computing.php', [TechController::class, 'cloud']);
Route::get('/big-data-analytics.php', [TechController::class, 'bigdata']);
Route::get('/chatbot-development-company.php', [TechController::class, 'chatbot']);
Route::get('/ibeacon-app-development-company.php', [TechController::class, 'ibeacon']);
Route::get('/iot-applications-development-company.php', [TechController::class, 'iot']);
Route::get('/blockchain-application-development-company.php', [TechController::class, 'blockchain']);
Route::get('/data-science.php', [TechController::class, 'datascience']);
Route::get('/ai-application-development-company.php', [TechController::class, 'ai']);


Route::get('/about-us.php', [TechController::class, 'about']);
Route::get('/clients.php', [TechController::class, 'client']);
Route::get('/contact-us.php', [TechController::class, 'contact']);


Route::get('/banking-and-finance-app-development.php', [IndustriesController::class, 'banking']);
Route::get('/multi-vendor-marketplace.php', [IndustriesController::class, 'vendor']);
Route::get('/affiliate-marketplace.php', [IndustriesController::class, 'affiliate']);
Route::get('/on-demand-app-development.php', [IndustriesController::class, 'demand']);
Route::get('/taxi-booking-app.php', [IndustriesController::class, 'taxi']);
Route::get('/job-portal-development.php', [IndustriesController::class, 'job']);
Route::get('/food-delivery-app.php', [IndustriesController::class, 'delivery']);
Route::get('/real-estate-app-development.php', [IndustriesController::class, 'realestate']);
Route::get('/lamp-development.php', [IndustriesController::class, 'lamb']);
Route::get('/social-media-app-development.php', [IndustriesController::class, 'socialmedia']);
Route::get('/ott-video-app-development.php', [IndustriesController::class, 'ott']);
Route::get('/education-portal-development.php', [IndustriesController::class, 'education']);
Route::get('/tour-travel-app-development.php', [IndustriesController::class, 'travel']);



Route::get('/portfolio/{category_1}.php', [PortfolioController::class, 'index']);
Route::get('/portfolio-seo-list.php', [PortfolioController::class, 'portfolio_seo']);
Route::get('/{id}/portfolio-seo-detail.php', [PortfolioController::class, 'portfolio_seo_detail']);

Route::get('/{id}/portfoliodetails.php', [PortfolioController::class, 'portfoliodetail']);






Route::get('/seo-services.php', [DigitalMarketingController::class, 'seo']);
Route::get('/smo-services.php', [DigitalMarketingController::class, 'smo']);
Route::get('/ppc-services.php', [DigitalMarketingController::class, 'ppc']);


Route::get('/local-seo-services.php', [DigitalMarketingController::class, 'local']);
Route::get('/online-reputation-management.php', [DigitalMarketingController::class, 'orm']);

Route::get('/healthcare-seo-services.php', [DigitalMarketingController::class, 'healthcare']);
Route::get('/limo-seo-services.php', [DigitalMarketingController::class, 'limoseo']);
Route::get('/law-firm-seo.php', [DigitalMarketingController::class, 'lawseo']);
Route::get('/e-commerce-seo-services.php', [DigitalMarketingController::class, 'ecommerce']);
// Route::get('/banking-and-finance-app-development', [DigitalMarketingController::class, 'banking']);



Route::get('/about.php', [DigitalMarketingController::class, 'aboutus']);


Route::get('/login_page', [logincontroller::class, 'login_page'])->name('login');
Route::get('/login', [logincontroller::class, 'login']);


Route::post('/logout', [logincontroller::class, 'destroy'])->name('logout');

Route::post('/credentials_check', [logincontroller::class, 'credentials_check']);
Route::get('/register', [logincontroller::class, 'register']);
Route::post('/signup', [logincontroller::class, 'signup']);
// Route::get('/admin_dashboard', [DashboardController::class, 'admin_dashboard']); 

// Route::get('/portfolio', [AdminportfolioController::class, 'portfolio']);

Route::get('/blog.php', [blogController::class, 'blog']);



Route::get('/e-wallet-app-development.php', [TechController::class, 'wallet']);
Route::get('/ui-ux-design-services.php', [TechController::class, 'uiux']);


Route::get('/blogs.php', [blogController::class, 'listBlogsFrontEnd']);
Route::get('/blogdetail/{slug}.php', [blogController::class, 'blogDetailFrontEnd']);

Route::middleware(['auth'])->group(function () {
    // Protected route for the admin dashboard
    Route::get('/admin_dashboard', [DashboardController::class, 'admin_dashboard']);

    Route::get('listBlogsForAdmin', [blogController::class, 'listBlogsForAdmin']);

    Route::get('listEnquiriesForAdmin', [enquiresController::class, 'listEnquiriesForAdmin']);
    Route::get('deleteEnquiriesForAdmin/{id}', [enquiresController::class, 'deleteEnquiriesForAdmin']);

    Route::get('listContactEnquiriesForAdmin', [enquiresController::class, 'listContactEnquiriesForAdmin']);
    Route::get('deleteContactEnquiriesForAdmin/{id}', [enquiresController::class, 'deleteContactEnquiriesForAdmin']);
});
// Route::get('listEnquiriesForAdmin', [enquiresController::class, 'listEnquiriesForAdmin']);
// for blog topic
Route::post('addBlogTopicApi', [BlogTopicController::class, 'save']);
Route::get('fetchBlogTopicApi', [BlogTopicController::class, 'fetch']);
Route::get('deleteBlogTopicApi', [BlogTopicController::class, 'delete']);

// proposals
Route::post('/submit-proposal', [ProposalController::class, 'store'])->name('proposal.store');
Route::get('listProposalEnquiriesForAdmin', [ProposalController::class, 'list']);
Route::get('deleteProposalEnquiriesForAdmin/{id}', [ProposalController::class, 'delete']);

// Quotes 
Route::post('saveQuotationApi', [QuoteController::class, 'store']);
Route::get('listQuoteEnquiriesForAdmin', [QuoteController::class, 'list']);
Route::get('deleteQuoteEnquiriesForAdmin/{id}', [QuoteController::class, 'delete']);

// for blogs
Route::get('listBlogsForAdminApi', [blogController::class, 'listBlogsForAdminApi']);
Route::get('deleteBlogsForAdminApi/{id}', [blogController::class, 'deleteBlogsForAdminApi']);
Route::get('editBlogsForAdminApi/{id}', [blogController::class, 'editBlogsForAdminApi']);
Route::post('saveBlogsForAdminApi', [blogController::class, 'saveBlogsForAdminApi']);
Route::get('fetchBlogDetailsApi/{id}', [blogController::class, 'fetchBlogDetailsApi']);
Route::post('updateBlogsForAdminApi', [blogController::class, 'updateBlogsForAdminApi']);


// Blogs for Admin
Route::get('listBlogsForAdmin', [blogController::class, 'listBlogsForAdmin']);
Route::get('AddBlogsForAdmin', [blogController::class, 'AddBlogsForAdmin'])->name('AddBlogsForAdmin');
Route::get('BlogsForAdmin/{role}', [blogController::class, 'AddBlogsForAdmin']);
Route::get('editBlogsForAdmin/{id}', [blogController::class, 'editBlogsForAdmin']);
Route::get('blogTopics', [BlogTopicController::class, 'blogTopics']);


// Portfolio for Admin
Route::get('listBlogsForAdmin', [blogController::class, 'listBlogsForAdmin']);
Route::post('savePortfolioForAdminApi', [PortfolioController::class, 'savePortfolioForAdminApi'])->name('savePortfolioForAdminApi');

Route::post('savePortfolioForAdminApi_seo', [PortfolioController::class, 'savePortfolioForAdminApi_seo'])->name('savePortfolioForAdminApi_seo');

Route::get('PortfolioForAdmin/{category_1}', [PortfolioController::class, 'PortfolioForAdmin'])->name('PortfolioForAdmin');
Route::get('/createportfolio_Developemnt', [PortfolioController::class, 'createportfolio']);
Route::get('/createportfolio_Seo', [PortfolioController::class, 'createportfolio_seo']);

Route::get('editPortfolioForAdmin_Development/{id}', [PortfolioController::class, 'editPortfolioForAdmin_Development']);
Route::get('editPortfolioForAdmin_Digital_Marketing/{id}', [PortfolioController::class, 'editPortfolioForAdmin_Digital_Marketing']);

Route::get('/createportfolio', [PortfolioController::class, 'createportfolio'])->name('createportfolio');
Route::get('editBlogsForAdmin/{id}', [blogController::class, 'editBlogsForAdmin']);
Route::post('updatePortfolioForAdminApi', [PortfolioController::class, 'updatePortfolioForAdminApi']);

Route::delete('deletePortfolioForAdminApi/{id}/{category_1}', [PortfolioController::class, 'deletePortfolioForAdminApi'])->name('deletePortfolioForAdminApi');



// Blogs comments
Route::get('blogComments/{role}', [BlogCommentController::class, 'blogComments']);

// for users blog
Route::get('listBlogsForUsersApi', [blogController::class, 'listBlogsForUsersApi']);
Route::get('blogDetailsForUsersApi/{blogID}/{b2b_id?}', [blogController::class, 'blogDetailsForUsersApi']);


// enquires for Admin
Route::post('/contact_enquiryFormSubmit', [enquiresController::class, 'contact_enquiryFormSubmit']);

Route::post('/enquiryFormSubmit', [enquiresController::class, 'enquiryFormSubmit']);



// Routs for static pages

// tech
Route::view('/tech-stack.php', 'frontend.tech.tech-stack');
Route::view('/wordpress-seo-agency.php', 'frontend.tech.wordpress-seo-agency');
Route::view('/certificate.php', 'frontend.tech.certificate');
Route::view('/automobile-software-solutions.php', 'frontend.tech.automobile-software-solutions');
Route::view('/methodology.php', 'frontend.tech.methodology');
Route::view('/testimonial.php', 'frontend.tech.testimonial');
Route::view('/partners.php', 'frontend.tech.partners');
Route::view('/content-writing-services.php', 'frontend.tech.content-writing-services');
Route::view('/landing-page-development.php', 'frontend.tech.landing-page-development');
Route::view('/thank-you.php', 'frontend.tech.thank-you');
// Route::view('/ott-video-app-development', 'frontend.tech.ott-video-app-development');
Route::view('/mobile-app-development.php', 'frontend.tech.mobile-app-development');
Route::view('/privacy-policy.php', 'frontend.tech.privacy-policy');
Route::view('/resources.php', 'frontend.tech.resources');
Route::view('/retailer-wholeseller.php', 'frontend.tech.retailer-wholeseller');
Route::view('/web-development.php', 'frontend.tech.web-development');
Route::view('/location.php', 'frontend.tech.location');
Route::view('/pwa.php', 'frontend.tech.pwa');
Route::view('/customer-software-development.php', 'frontend.tech.customer_software_development');
Route::view('/erp-software-development.php', 'frontend.tech.erp_software_development');
Route::view('/crm-development.php', 'frontend.tech.crm_development');
Route::view('/generative-ai.php', 'frontend.tech.generative_ai');
Route::view('/google-vision.php', 'frontend.tech.google_vision');
Route::view('/quality-analysis.php', 'frontend.tech.quality_analysis');
Route::view('/software-development.php', 'frontend.tech.software-development');


// industries
Route::view('/industries.php', 'frontend.industries.industries');



// digital-marketing
// Route::view('/affiliate-marketplace', 'frontend.digital-marketing.affiliate-marketplace');
Route::view('/amazon-ppc-services.php', 'frontend.digital-marketing.amazon-ppc-services');
Route::view('/amazon-seo-services.php', 'frontend.digital-marketing.amazon-seo-services');
Route::view('/amazon-web-services.php', 'frontend.digital-marketing.amazon-web-services');
Route::view('/email-marketing.php', 'frontend.digital-marketing.email-marketing');
Route::view('/finance-banking-software-development.php', 'frontend.digital-marketing.finance-banking-software-development');
Route::view('/instagram-marketing-services.php', 'frontend.digital-marketing.instagram-marketing-services');
Route::view('/media-advertisement.php', 'frontend.digital-marketing.media-advertisement');
Route::view('/real-state-portal-development-company.php', 'frontend.digital-marketing.real-state-portal-development-company');
Route::view('/seo-for-banks.php', 'frontend.digital-marketing.seo-for-banks');
Route::view('/seo-reseller.php', 'frontend.digital-marketing.seo-reseller');
Route::view('/seo-political-campaigns-management.php', 'frontend.digital-marketing.seo-political-campaigns-management');
Route::view('/social-media-marketing-services.php', 'frontend.digital-marketing.social-media-marketing-services');
Route::view('/seo-company-ahmedabad.php', 'frontend.digital-marketing.seo-company-ahmedabad');
Route::view('/seo-company-delhi.php', 'frontend.digital-marketing.seo-company-delhi');
Route::view('/seo-company-bangalore.php', 'frontend.digital-marketing.seo-company-bangalore');
Route::view('/seo-services-chandigarh.php', 'frontend.digital-marketing.seo-services-chandigarh');
Route::view('/seo-company-chennai.php', 'frontend.digital-marketing.seo-company-chennai');
Route::view('/seo-for-real-estate.php', 'frontend.digital-marketing.seo-for-real-estate');
Route::view('/seo-company-ghaziabad.php', 'frontend.digital-marketing.seo-company-ghaziabad');
Route::view('/seo-for-colleges-university.php', 'frontend.digital-marketing.seo-for-colleges-university');
Route::view('/seo-services-for-hotels-and-restaurants.php', 'frontend.digital-marketing.seo-services-for-hotels-and-restaurants');
Route::view('/shopify-seo-agency.php', 'frontend.digital-marketing.shopify-seo-agency');
Route::view('/squarespace-seo-services.php', 'frontend.digital-marketing.squarespace-seo-services');
Route::view('/wix-seo-agency.php', 'frontend.digital-marketing.wix-seo-agency');
Route::view('/video-marketing.php', 'frontend.digital-marketing.video-marketing');


// Route::get('/404', [DigitalMarketingController::class, 'pagenotfound']);

Route::fallback(function () {
    // Check if the request is the root (i.e., "/")
    if (request()->path() === '/') {
        // Simply return a redirect to the home page
        return redirect('/'); // This is correct
    }

    // For all other undefined routes, return the custom 404 page
    return response()->view('frontend.tech.404', [], 404);
});

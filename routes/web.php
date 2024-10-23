<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;


use App\Http\Controllers\PageViewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminEnquiryController;
use App\Http\Controllers\Admin\AdminServiceController;

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

$currentUrl = Request::fullUrl();

if( ($currentUrl == 'https://juststart.co.in/public') || ($currentUrl == 'https://juststart.co.in/public/') ){
	$newUrl = 'https://juststart.co.in';
	?>
	<script>
		window.location.href = "<?php echo $newUrl; ?>";
	</script>
	<?php
}

if (strpos($currentUrl, 'public/') !== false) {
	$newUrl = str_replace('public/', '', $currentUrl);
	?>
	<script>
		window.location.href = "<?php echo $newUrl; ?>";
	</script>
	<?php
}


Route::get('/', [PageViewController::class, 'home'])->name('home');



Route::get('about-us', [PageViewController::class, 'aboutUs'])->name('aboutUs');
Route::get('contact-us', [PageViewController::class, 'contactUs'])->name('contactUs');
Route::get('terms-conditions', [PageViewController::class, 'termsConditions'])->name('termsConditions');
Route::get('cancellation-refund-policy', [PageViewController::class, 'refundPolicy'])->name('refundPolicy');
Route::get('disclaimer-policy', [PageViewController::class, 'disclaimerPolicy'])->name('disclaimerPolicy');
Route::get('privacy-policy', [PageViewController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('payment', [PageViewController::class, 'payment'])->name('payment');
Route::get('payment-ccavenue', [PageViewController::class, 'paymentCcAvenue'])->name('paymentCcAvenue');
Route::get('thank-you', [PageViewController::class, 'thankYou'])->name('thankYou');
Route::get('sitemap', [PageViewController::class, 'sitemap'])->name('sitemap');
// Route::get('blog', [PageViewController::class, 'blog'])->name('blog');

Route::get('private-limited-company-registration-online', [LandingPageController::class, 'index'])->name('landing');
Route::get('limited-liability-partnership-registration-online-in-india', [LandingPageController::class, 'index'])->name('landing');
Route::get('trademark-registration-online-in-india', [LandingPageController::class, 'index'])->name('landing');


Route::get('test-plugin', [LandingPageController::class, 'testPlugin'])->name('testPlugin');
Route::get('test-email', [EnquiryController::class, 'testEmail'])->name('testEmail');
/*
General Pages
-----------------------------
http://likedislike.in/demo/public
http://likedislike.in/demo/public/about-us
http://likedislike.in/demo/public/contact-us
http://likedislike.in/demo/public/terms-conditions
http://likedislike.in/demo/public/cancellation-refund-policy
http://likedislike.in/demo/public/disclaimer-policy
http://likedislike.in/demo/public/payment
http://likedislike.in/demo/public/payment-ccavenue
http://likedislike.in/demo/public/thank-you

Landing Pages
-----------------------------
https://juststart.co.in/private-limited-company-registration-online
https://juststart.co.in/limited-liability-partnership-registration-online-in-india
https://juststart.co.in/trademark-registration-online-in-india

Service Pages
-----------------------------
https://likedislike.in/demo/public/service/private-limited-company-registration
https://likedislike.in/demo/public/service/limited-liability-partnership
https://likedislike.in/demo/public/service/company-registration-consultant
https://likedislike.in/demo/public/service/roc-filling-for-opc
https://likedislike.in/demo/public/service/small-business-registration-online
https://likedislike.in/demo/public/service/virtual-office-address
https://likedislike.in/demo/public/service/appointment-of-director/
https://likedislike.in/demo/public/service/change-of-registered-office/
https://likedislike.in/demo/public/service/closure-of-opc/
https://likedislike.in/demo/public/service/closure-of-the-llp/
https://likedislike.in/demo/public/service/closure-of-the-pvt-ltd
https://likedislike.in/demo/public/service/gst-registration
https://likedislike.in/demo/public/service/gst-returns-filing
https://likedislike.in/demo/public/service/legal-advisory-services
https://likedislike.in/demo/public/service/increase-in-authorized-capital
https://likedislike.in/demo/public/service/online-accounting-services
https://likedislike.in/demo/public/service/trademark-renewal
https://likedislike.in/demo/public/service/resignation-of-director
https://likedislike.in/demo/public/service/roc-filling-for-llp
https://likedislike.in/demo/public/service/roc-filling-for-pvt-ltd
https://likedislike.in/demo/public/service/strike-off-of-company
https://likedislike.in/demo/public/service/trademark-objection-reply
https://likedislike.in/demo/public/service/trademark-opposition
https://likedislike.in/demo/public/service/transfer-of-shares
https://likedislike.in/demo/public/service/private-limited-company-registration-in-bangalore
https://likedislike.in/demo/public/service/private-limited-company-registration-in-delhi
https://likedislike.in/demo/public/service/private-limited-company-registration-in-maharashtra
https://likedislike.in/demo/public/service/private-limited-company-registration-in-uttar-pradesh


Extra Pending Pages
-----------------------------
https://juststart.co.in/product/trademark-registration/
https://juststart.co.in/product/sole-proprietorship-registration-online/
https://juststart.co.in/product/startup-india/
https://juststart.co.in/product/one-person-company/
https://juststart.co.in/product/public-limited/
https://juststart.co.in/product/section-8-co-ngo/

Other
-----------------------------
https://likedislike.in/demo/public/blog

*/



// Service Page List
Route::post('service-form-submit', [EnquiryController::class, 'formSubmit'])->name('service-form-submit');
Route::get('service/{slug}', [ServiceController::class, 'index'])->name('service');


// Admin Routes
Route::get('admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [LoginController::class, 'logoutSubmit'])->name('admin.logoutSubmit');

Route::post('admin/login-submit', [LoginController::class, 'loginSubmit'])->name('admin.loginSubmit');


Route::group(['prefix'=>'admin','middleware' => ['auth', 'admin']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('metatags', [DashboardController::class, 'metatags'])->name('admin.metatags');
    Route::get('pages', [DashboardController::class, 'pages'])->name('admin.pages');
    Route::get('clients', [DashboardController::class, 'clients'])->name('admin.clients');
    Route::get('pages/create/home', [DashboardController::class, 'createPages'])->name('admin.pages.create');
    Route::get('pages/create/about', [DashboardController::class, 'createAbout'])->name('admin.about.create');
    Route::get('pages/create/contact', [DashboardController::class, 'createContact'])->name('admin.Contact.create');
    Route::get('pages/create/page', [DashboardController::class, 'createCustomPages'])->name('admin.pages.createcustom');
    Route::get('pages/home/{id}', [DashboardController::class, 'editHome'])->name('admin.homepages.edit');
    Route::get('pages/about/{id}', [DashboardController::class, 'editAbout'])->name('admin.AboutPage.edit');
    Route::get('pages/contact/{id}', [DashboardController::class, 'editContact'])->name('admin.ContactPage.edit');
	Route::get('enquiry', [AdminEnquiryController::class, 'index'])->name('admin.enquiry');

	// services
    Route::get('pages/servcies', [DashboardController::class, 'indexServices'])->name('admin.service.view');
    Route::get('pages/servcie/{id}', [DashboardController::class, 'editService'])->name('admin.service.edit');
    Route::get('pages/create/service', [DashboardController::class, 'createServices'])->name('admin.service.create');


	// post Requests
	// CK Editor Uploads
	Route::post('/upload', [DashboardController::class, 'upload'])->name('upload');
	// rest
    Route::post('pages/service/store', [DashboardController::class, 'storeService'])->name('admin.service.store');
    Route::post('pages/contact/store', [DashboardController::class, 'storeContactPage'])->name('admin.contact.store');
    Route::put('pages/contact/uddate/{id}', [DashboardController::class, 'updateContactPage'])->name('admin.contact.update');
    Route::put('pages/service/update/{id}', [DashboardController::class, 'updateService'])->name('admin.service.updateService');
    Route::post('pages/home/store', [DashboardController::class, 'storeHomepage'])->name('admin.pagesUpdate.homepage');
    Route::post('pages/about/store', [DashboardController::class, 'storeAboutpage'])->name('admin.pagesUpdate.aboutpage');
    Route::post('pages/client/store', [DashboardController::class, 'storeClientpage'])->name('admin.storeClient');
    Route::put('pages/home/update/{id}', [DashboardController::class, 'updateHomepage'])->name('admin.homepage.update');
    Route::put('pages/client/update/{id}', [DashboardController::class, 'storeClientAlt'])->name('admin.storeClient.update');
    Route::delete('pages/client/{id}', [DashboardController::class, 'destoryClient'])->name('admin.destoryClient');
    // Route::post('pages/updateBanner', [DashboardController::class, 'updateBanner'])->name('admin.pagesUpdate.Banner');

	// Services
	Route::get('service', [AdminServiceController::class, 'index'])->name('admin.service');
	Route::get('service/seo/{id}', [AdminServiceController::class, 'seo'])->name('admin.serviceSeo');
	Route::post('service/seo/update/{id}', [AdminServiceController::class, 'seoUpdate'])->name('admin.serviceSeoUpdate');


    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
});






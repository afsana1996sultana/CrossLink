<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admins\StatusController;
use App\Http\Controllers\Admins\MenuController;
use App\Http\Controllers\Admins\SubmenuController;
use App\Http\Controllers\Admins\ChildmenuController;
use App\Http\Controllers\Admins\UsefulllinkController;
use App\Http\Controllers\Admins\SociallinkController;
use App\Http\Controllers\Admins\MessageController;
use App\Http\Controllers\Admins\NewsletterController;
use App\Http\Controllers\Admins\ResumeController;
use App\Http\Controllers\Admins\MissionController;
use App\Http\Controllers\Admins\VissionController;
use App\Http\Controllers\Admins\TestimonialController;
use App\Http\Controllers\Admins\FrequentlyaskedController;
use App\Http\Controllers\Admins\SponsorController;
use App\Http\Controllers\Admins\CustomerController;
use App\Http\Controllers\Admins\CustomerworkController;
use App\Http\Controllers\Admins\AutomationController;
use App\Http\Controllers\Admins\OfferController;
use App\Http\Controllers\Admins\TeamController;
use App\Http\Controllers\Admins\ProjectController;
use App\Http\Controllers\Admins\ServiceController;
use App\Http\Controllers\Admins\ProductController;
use App\Http\Controllers\Admins\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\OurteamController;
use App\Http\Controllers\Frontend\OurcustomerController;
use App\Http\Controllers\Frontend\AutomationprojectController;
use App\Http\Controllers\Frontend\ProjectdoneController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\AllserviceController;
use App\Http\Controllers\Frontend\ProductcategoryController;
use App\Http\Controllers\Frontend\ProductsubcategoryController;
use App\Http\Controllers\Frontend\ProductdetailController;
use App\Http\Controllers\Frontend\BlogdetailController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\ServicedetailController;
use App\Http\Controllers\Admins\UserController;
use Illuminate\Support\Facades\Auth;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend


Route::get('home', function(){
    return redirect('/');
});

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');

Route::get('home', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');



////////////////////Contact/////////////////////////
Route::get('/contact-us',[ContactController::class,'index' ]);


////////////////////About-Us/////////////////////////
Route::get('/about-us',[AboutusController::class,'index' ]);


////////////////////Career/////////////////////////
Route::get('/career',[CareerController::class,'index' ]);


////////////////////News/////////////////////////
Route::get('/news',[NewsController::class,'index' ]);


////////////////////Our-Team/////////////////////////
Route::get('/our-team',[OurteamController::class,'index' ]);


////////////////////Our-Customers/////////////////////////
Route::get('/our-customers',[OurcustomerController::class,'index' ]);


////////////////////Automation-Project/////////////////////////
Route::get('/automation-projects-work',[AutomationprojectController::class,'index' ]);



////////////////////Project-Done/////////////////////////
Route::get('/projects-done',[ProjectdoneController::class,'index' ]);
Route::get('/projects',[ProjectdoneController::class,'index' ]);


////////////////////Services/////////////////////////
Route::get('/services',[AllserviceController::class,'index' ]);


///////////////////////Product/////////////////////////////////
Route::resource('product', App\Http\Controllers\Admins\ProductController::class);
Route::delete('delete-product', [ProductController::class, 'destroy']);


////////////////////Product-Category/////////////////////////
Route::get('product_category/{slug}', [ProductcategoryController::class, 'product_category']);


////////////////////Product-Sub-Category/////////////////////////
Route::get('product_sub_category/{slug}', [ProductsubcategoryController::class, 'product_sub_category']);


////////////////////Product-Details/////////////////////////
Route::get('product_details/{slug}', [ProductdetailController::class, 'product_details']);


////////////////////Blog-Details/////////////////////////
Route::get('blog_details/{slug}', [BlogdetailController::class, 'blog_details']);


////////////////////Service-Details/////////////////////////
Route::get('service_details/{slug}', [ServicedetailController::class, 'service_details']);


////////////////////Message-Post/////////////////////////
Route::post('message_store',[MessageController::class,'store' ])->name('message_store');


////////////////////Newsletter-Post/////////////////////////
Route::post('newsletter_store',[NewsletterController::class,'store' ])->name('newsletter_store');


////////////////////Resume-Post/////////////////////////
Route::post('resume_store',[ResumeController::class,'store' ])->name('resume_store');


////////////////////Comment-Post/////////////////////////
Route::post('/comment-post', [CommentController::class, 'Store'])->name('comment-post');


Route::get('admin', function(){
    return redirect('login');
});

Auth::routes();



Route::group(['middleware' =>  'auth'], function() {
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



//////////////////////Status/////////////////////////////////
Route::resource('status', App\Http\Controllers\Admins\StatusController::class);
Route::get('edit-status/{id}', [StatusController::class, 'edit']);
Route::put('status-update', [StatusController::class, 'update']);
Route::delete('delete-status', [StatusController::class, 'destroy']);


////////////////////Message/////////////////////////
Route::resource('message', App\Http\Controllers\Admins\MessageController::class);
Route::get('show-message/{id}',[MessageController::class,'show' ]);
Route::delete('delete-message',[MessageController::class,'destroy' ]);


////////////////////Newsletter/////////////////////////
Route::resource('newsletter', App\Http\Controllers\Admins\NewsletterController::class);
Route::get('show-newsletter/{id}',[NewsletterController::class,'show' ]);
Route::delete('delete-newsletter',[NewsletterController::class,'destroy' ]);



////////////////////Resume/////////////////////////
Route::resource('resume', App\Http\Controllers\Admins\ResumeController::class);
Route::get('show-resume/{id}',[ResumeController::class,'show' ]);
Route::delete('delete-resume',[ResumeController::class,'destroy' ]);


///////////////////////Comment/////////////////////////////////
Route::resource('comment', App\Http\Controllers\Frontend\CommentController::class);
Route::get('edit-comment/{id}', [CommentController::class, 'edit']);
Route::put('comment-update', [CommentController::class, 'update']);
Route::delete('delete-comment', [CommentController::class, 'destroy']);



//////////////////////Menu/////////////////////////////////
Route::resource('menu', App\Http\Controllers\Admins\MenuController::class);
Route::get('edit-menu/{id}', [MenuController::class, 'edit']);
Route::put('menu-update', [MenuController::class, 'update']);
Route::delete('delete-menu', [MenuController::class, 'destroy']);



//////////////////////Sub-Menu/////////////////////////////////
Route::resource('sub-menu', App\Http\Controllers\Admins\SubmenuController::class);
Route::get('edit-sub-menu/{id}', [SubmenuController::class, 'edit']);
Route::put('sub-menu-update', [SubmenuController::class, 'update']);
Route::delete('delete-sub-menu', [SubmenuController::class, 'destroy']);



//////////////////////Child-Menu/////////////////////////////////
Route::resource('child-menu', App\Http\Controllers\Admins\ChildmenuController::class);
Route::get('edit-child-menu/{id}', [ChildmenuController::class, 'edit']);
Route::put('child-menu-update', [ChildmenuController::class, 'update']);
Route::delete('delete-child-menu', [ChildmenuController::class, 'destroy']);


////////////////////Topbar/////////////////////////////////
Route::resource('topbar', App\Http\Controllers\Admins\TopbarController::class);


////////////////////Header/////////////////////////////////
Route::resource('header', App\Http\Controllers\Admins\HeaderController::class);


////////////////////Footer/////////////////////////////////
Route::resource('footer', App\Http\Controllers\Admins\FooterController::class);


////////////////////About/////////////////////////////////
Route::resource('about', App\Http\Controllers\Admins\AboutController::class);


////////////////////Career/////////////////////////////////
Route::resource('career-data', App\Http\Controllers\Admins\CareerdataController::class);


///////////////////////Blog/////////////////////////////////
Route::resource('blog-list', App\Http\Controllers\Admins\BlogController::class);
Route::delete('delete-blog-list', [BlogController::class, 'destroy']);



//////////////////////Usefull-Link/////////////////////////////////
Route::resource('usefull-link', App\Http\Controllers\Admins\UsefulllinkController::class);
Route::get('edit-usefull-link/{id}', [UsefulllinkController::class, 'edit']);
Route::put('usefull-link-update', [UsefulllinkController::class, 'update']);
Route::delete('delete-usefull-link', [UsefulllinkController::class, 'destroy']);


//////////////////////Social-Link/////////////////////////////////
Route::resource('social-link', App\Http\Controllers\Admins\SociallinkController::class);
Route::get('edit-social-link/{id}', [SociallinkController::class, 'edit']);
Route::put('social-link-update', [SociallinkController::class, 'update']);
Route::delete('delete-social-link', [SociallinkController::class, 'destroy']);



//////////////////////Mission/////////////////////////////////
Route::resource('mission', App\Http\Controllers\Admins\MissionController::class);
Route::get('edit-mission/{id}', [MissionController::class, 'edit']);
Route::put('mission-update', [MissionController::class, 'update']);
Route::delete('delete-mission', [MissionController::class, 'destroy']);



//////////////////////Vission/////////////////////////////////
Route::resource('vission', App\Http\Controllers\Admins\VissionController::class);
Route::get('edit-vission/{id}', [VissionController::class, 'edit']);
Route::put('vission-update', [VissionController::class, 'update']);
Route::delete('delete-vission', [VissionController::class, 'destroy']);


//////////////////////Testimonial/////////////////////////////////
Route::resource('testimonial', App\Http\Controllers\Admins\TestimonialController::class);
Route::get('edit-testimonial/{id}', [TestimonialController::class, 'edit']);
Route::put('testimonial-update', [TestimonialController::class, 'update']);
Route::delete('delete-testimonial', [TestimonialController::class, 'destroy']);



//////////////////////Frequently-Asked-Question/////////////////////////////////
Route::resource('frequently-asked-question', App\Http\Controllers\Admins\FrequentlyaskedController::class);
Route::get('edit-frequently-asked-question/{id}', [FrequentlyaskedController::class, 'edit']);
Route::put('frequently-asked-question-update', [FrequentlyaskedController::class, 'update']);
Route::delete('delete-frequently-asked-question', [FrequentlyaskedController::class, 'destroy']);


//////////////////////Automation-Work/////////////////////////////////
Route::resource('automation-work', App\Http\Controllers\Admins\AutomationController::class);
Route::get('edit-automation-work/{id}', [AutomationController::class, 'edit']);
Route::put('automation-work-update', [AutomationController::class, 'update']);
Route::delete('delete-automation-work', [AutomationController::class, 'destroy']);


//////////////////////Offer/////////////////////////////////
Route::resource('offer', App\Http\Controllers\Admins\OfferController::class);
Route::get('edit-offer/{id}', [OfferController::class, 'edit']);
Route::put('offer-update', [OfferController::class, 'update']);
Route::delete('delete-offer', [OfferController::class, 'destroy']);



//////////////////////Sponsor/////////////////////////////////
Route::resource('sponsor', App\Http\Controllers\Admins\SponsorController::class);
Route::get('edit-sponsor/{id}', [SponsorController::class, 'edit']);
Route::put('sponsor-update', [SponsorController::class, 'update']);
Route::delete('delete-sponsor', [SponsorController::class, 'destroy']);



//////////////////////Customer/////////////////////////////////
Route::resource('customer-list', App\Http\Controllers\Admins\CustomerController::class);
Route::get('edit-customer-list/{id}', [CustomerController::class, 'edit']);
Route::put('customer-list-update', [CustomerController::class, 'update']);
Route::delete('delete-customer-list', [CustomerController::class, 'destroy']);


//////////////////////Customer-Work/////////////////////////////////
Route::resource('customer-work', App\Http\Controllers\Admins\CustomerworkController::class);
Route::get('edit-customer-work/{id}', [CustomerworkController::class, 'edit']);
Route::put('customer-work-update', [CustomerworkController::class, 'update']);
Route::delete('delete-customer-work', [CustomerworkController::class, 'destroy']);


//////////////////////Team/////////////////////////////////
Route::resource('team', App\Http\Controllers\Admins\TeamController::class);
Route::get('edit-team/{id}', [TeamController::class, 'edit']);
Route::put('team-update', [TeamController::class, 'update']);
Route::delete('delete-team', [TeamController::class, 'destroy']);


//////////////////////Projects/////////////////////////////////
Route::resource('project-list', App\Http\Controllers\Admins\ProjectController::class);
Route::get('edit-project-list/{id}', [ProjectController::class, 'edit']);
Route::put('project-list-update', [ProjectController::class, 'update']);
Route::delete('delete-project-list', [ProjectController::class, 'destroy']);



//////////////////////Service/////////////////////////////////
Route::resource('all-service', App\Http\Controllers\Admins\ServiceController::class);
Route::get('edit-all-service/{id}', [ServiceController::class, 'edit']);
Route::put('all-service-update', [ServiceController::class, 'update']);
Route::delete('delete-all-service', [ServiceController::class, 'destroy']);



////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::get('show-users/{id}',[UserController::class,'show' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);


});
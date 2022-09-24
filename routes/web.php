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
use App\Http\Controllers\Admins\MissionController;
use App\Http\Controllers\Admins\VissionController;
use App\Http\Controllers\Admins\TestimonialController;
use App\Http\Controllers\Admins\FrequentlyaskedController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\CareerController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ProductcategoryController;
use App\Http\Controllers\Frontend\ProductsubcategoryController;
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



////////////////////Product-Category/////////////////////////
Route::get('product_category/{slug}', [ProductcategoryController::class, 'product_category']);


////////////////////Product-Sub-Category/////////////////////////
Route::get('product_sub_category/{slug}', [ProductsubcategoryController::class, 'product_sub_category']);


////////////////////Message/////////////////////////
Route::resource('message', App\Http\Controllers\Admins\MessageController::class);
Route::get('show-message/{id}',[MessageController::class,'show' ]);
Route::delete('delete-message',[MessageController::class,'destroy' ]);
Route::post('message_store',[MessageController::class,'store' ])->name('message_store');


////////////////////Newsletter/////////////////////////
Route::resource('newsletter', App\Http\Controllers\Admins\NewsletterController::class);
Route::get('show-newsletter/{id}',[NewsletterController::class,'show' ]);
Route::delete('delete-newsletter',[NewsletterController::class,'destroy' ]);
Route::post('newsletter_store',[NewsletterController::class,'store' ])->name('newsletter_store');


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


////////////////////User/////////////////////////
Route::resource('users', UserController::class);
Route::get('edit-users/{id}',[UserController::class,'edit' ]);
Route::put('users-update',[UserController::class,'update' ]);
Route::delete('delete-users',[UserController::class,'destroy' ]);


});
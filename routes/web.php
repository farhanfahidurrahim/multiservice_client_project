<?php

// use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return redirect()->route('login');
// });
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// <?php
/*
use Faker\Guesser\Name;
Route::get('/', function () {
    return view('welcome');
});*/


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\GroceryController;
use App\Http\Controllers\IslamicController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MortageController;
use App\Http\Controllers\HavcController;
use App\Http\Controllers\MoneysendController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CommunityPersonController;
use App\Http\Controllers\NewsblogController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerMagementController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\HelpAndSupportController;
use App\Http\Controllers\TermsOfServiceController;;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\EmergencyContactsController;

Route::get('/', function () {
    return redirect()->route('login');
    //return redirect()->route('index');
})->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('dashboard')->group(function () {
    Route::view('index', 'dashboard.index')->name('index');
});

// Shop
Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class,'index'])->name('shop.index');
    Route::get('/create', [ShopController::class,'create'])->name('shop.create');
    Route::post('/store', [ShopController::class,'store'])->name('shop.store');
    Route::DELETE('/delete/{id}', [ShopController::class,'destroy'])->name('shop.destroy');
    // Route::get('/view/{id}', [ShopController::class,'view'])->name('shop.view');
    Route::get('/product-deatils', [ShopController::class,'indexProductDetails'])->name('productdetails.index');
    Route::get('/product-deatils-add', [ShopController::class,'addProductDetails'])->name('productdetails.add');
    Route::post('/product-deatils-store', [ShopController::class,'storeProductDetails'])->name('productdetails.store');
    Route::get('/view', [ShopController::class,'view'])->name('hotels.view');
});

// Grocery
Route::prefix('grocery')->group(function () {
    Route::get('/', [GroceryController::class,'index'])->name('grocery.index');
    Route::get('/create', [GroceryController::class,'create'])->name('grocery.create');
    Route::post('/store', [GroceryController::class,'store'])->name('grocery.store');
    Route::DELETE('/delete/{id}', [GroceryController::class,'destroy'])->name('grocery.destroy');
    Route::get('/product-deatils', [GroceryController::class,'indexPD'])->name('grocery.productdetails.index');
    Route::get('/product-deatils-add', [GroceryController::class,'addPD'])->name('grocery.productdetails.add');
    Route::post('/product-deatils-store', [GroceryController::class,'storePD'])->name('grocery.productdetails.store');
    Route::DELETE('/product-deatils-delete/{id}', [GroceryController::class,'destroyPD'])->name('grocery.productdetails.destroy');
});

// Islamic
Route::prefix('islamic')->group(function () {
    Route::get('/', [IslamicController::class,'index'])->name('islamic.index');
    Route::get('/create', [IslamicController::class,'create'])->name('islamic.create');
    Route::post('/store', [IslamicController::class,'store'])->name('islamic.store');
    Route::DELETE('/delete/{id}', [IslamicController::class,'destroy'])->name('islamic.destroy');
});

// Lawyer
Route::prefix('lawyer')->group(function () {
    Route::get('/', [LawyerController::class,'index'])->name('lawyer.index');
    Route::get('/create', [LawyerController::class,'create'])->name('lawyer.create');
    Route::post('/store', [LawyerController::class,'store'])->name('lawyer.store');
    Route::DELETE('/delete/{id}', [LawyerController::class,'destroy'])->name('lawyer.destroy');
});

// Retailer
Route::prefix('retailer')->group(function () {
    Route::get('/', [RetailerController::class,'index'])->name('retailer.index');
    Route::get('/create', [RetailerController::class,'create'])->name('retailer.create');
    Route::post('/store', [RetailerController::class,'store'])->name('retailer.store');
    Route::DELETE('/delete/{id}', [RetailerController::class,'destroy'])->name('retailer.destroy');
});

// Mortage
Route::prefix('mortage')->group(function () {
    Route::get('/', [MortageController::class,'index'])->name('mortage.index');
    Route::get('/create', [MortageController::class,'create'])->name('mortage.create');
    Route::post('/store', [MortageController::class,'store'])->name('mortage.store');
    Route::DELETE('/delete/{id}', [MortageController::class,'destroy'])->name('mortage.destroy');
});

// Havc
Route::prefix('havc')->group(function () {
    Route::get('/', [HavcController::class,'index'])->name('havc.index');
    Route::get('/create', [HavcController::class,'create'])->name('havc.create');
    Route::post('/store', [HavcController::class,'store'])->name('havc.store');
    Route::DELETE('/delete/{id}', [HavcController::class,'destroy'])->name('destroy');
});

// Mopney Send
Route::prefix('money-send')->group(function () {
    Route::get('/', [MoneysendController::class,'index'])->name('moneysend.index');
    Route::get('/create', [MoneysendController::class,'create'])->name('moneysend.create');
    Route::post('/store', [MoneysendController::class,'store'])->name('moneysend.store');
    Route::DELETE('/delete/{id}', [MoneysendController::class,'destroy'])->name('moneysend.destroy');
});

// Doctors
Route::prefix('doctor')->group(function () {
    Route::get('/', [DoctorController::class,'index'])->name('doctor.index');
    Route::get('/create', [DoctorController::class,'create'])->name('doctor.create');
    Route::post('/store', [DoctorController::class,'store'])->name('doctor.store');
    Route::DELETE('/delete/{id}', [DoctorController::class,'destroy'])->name('destroy');
});

// Doctors
Route::prefix('community-person')->group(function () {
    Route::get('/', [CommunityPersonController::class,'index'])->name('communityperson.index');
    Route::get('/create', [CommunityPersonController::class,'create'])->name('communityperson.create');
    Route::post('/store', [CommunityPersonController::class,'store'])->name('communityperson.store');
    Route::DELETE('/delete/{id}', [CommunityPersonController::class,'destroy'])->name('destroy');
});

// Restaurant
Route::prefix('restaurant')->group(function () {
    Route::get('/', [RestaurantController::class,'index'])->name('restaurant.index');
    Route::get('/create', [RestaurantController::class,'create'])->name('restaurant.create');
    Route::post('/store', [RestaurantController::class,'store'])->name('restaurant.store');
    Route::DELETE('/delete/{id}', [RestaurantController::class,'destroy'])->name('restaurant.destroy');
    Route::get('/product-deatils', [RestaurantController::class,'indexPD'])->name('restaurant.productdetails');
    Route::get('/product-deatils-create', [RestaurantController::class,'createPD'])->name('restaurant.productdetails.create');
    Route::post('/product-deatils-store', [RestaurantController::class,'storePD'])->name('restaurant.productdetails.store');
});

// News Blog
Route::prefix('news-blog')->group(function () {
    Route::get('/', [NewsblogController::class,'index'])->name('newsblog.index');
    Route::get('/create', [NewsblogController::class,'create'])->name('newsblog.create');
    Route::post('/store', [NewsblogController::class,'store'])->name('newsblog.store');
    Route::DELETE('/delete/{id}', [NewsblogController::class,'destroy'])->name('newsblog.destroy');
});

Route::prefix('vendor')->group(function () {
    Route::get('/', [VendorController::class,'index'])->name('vendor.index');
    Route::get('/create', [VendorController::class,'create'])->name('vendor.create');
    Route::post('/store', [VendorController::class,'store'])->name('vendor.store');
    //Route::get('/roles', [RolesController::class,'index']);
});

Route::prefix('about')->group(function () {
    Route::get('edit', [AboutUsController::class,'edit'])->name('about.edit');
    Route::get('add', [AboutUsController::class,'add'])->name('about.add');
    Route::get('delete', [AboutUsController::class,'create'])->name('about.delete');
    Route::patch('update', [AboutUsController::class,'update'])->name('about.update');
});

Route::prefix('privacy')->group(function () {
    Route::get('edit', [PrivacyPolicyController::class,'edit'])->name('privacy.edit');
    Route::get('add', [PrivacyPolicyController::class,'add'])->name('privacy.add');
    Route::get('delete', [PrivacyPolicyController::class,'create'])->name('privacy.delete');
    Route::patch('update', [PrivacyPolicyController::class,'update'])->name('privacy.update');
});

Route::prefix('support')->group(function () {
    Route::get('edit', [HelpAndSupportController::class,'edit'])->name('support.edit');
    Route::get('add', [HelpAndSupportController::class,'add'])->name('support.add');
    Route::get('delete', [HelpAndSupportController::class,'create'])->name('support.delete');
    Route::patch('update', [HelpAndSupportController::class,'update'])->name('support.update');
});

Route::prefix('service')->group(function () {
    Route::get('edit', [TermsOfServiceController::class,'edit'])->name('service.edit');
    Route::patch('update', [TermsOfServiceController::class,'update'])->name('service.update');
});

Route::prefix('popular-deals')->group(function () {
    Route::get('/', [PopularDealsController::class,'index'])->name('deals.index');
});



Route::resource('emergency', EmergencyContactsController::class);
Route::resource('customer',CustomerController::class);


// Route::get('/login', function(){
//     return view('admin.login');
// })->name('login');

// Route::get('/register', function(){
//     return view('admin.register');
// })->name('sign-up');

// Route::get('/forget-password', function(){
//     return view('admin.forget-password');
// })->name('forget-password');


//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');


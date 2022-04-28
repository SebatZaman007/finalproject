<?php

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\SslCommerzPaymentController;


// Route::get('/', function () {
//     return view('welcome');
// });
//***************Frontend********************//

Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');

Route::get('/',[HomeController::class,'index'])->name('index'); //for home page
Route::get('/about',[HomeController::class,'about'])->name('about'); //for about page
Route::get('/contact',[HomeController::class,'contact'])->name('contact'); //for contact page
Route::get('/product',[HomeController::class,'product'])->name('product'); //for product page



Route::post('add-cart/{id}',[HomeController::class,'addCart'])->name('add.cart'); //add-cart
Route::get('/show-cart',[HomeController::class,'showCart'])->name('show.cart'); //for show cart
Route::get('/cart-delete/{id}',[HomeController::class,'deleteCart'])->name('cart.delete'); //for delete cart
Route::post('/confirm-order',[HomeController::class,'confirmOrder'])->name('confirm.order'); //for confirm-order
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout'); //for checkout
Route::get('/final-order',[HomeController::class,'finalOrder'])->name('final.order'); //for checkout
// Route::match(['get', 'post'], '/checkout',HomeController::class,'checkout'

// )->name('checkout');
  //for checkout
//   Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout'); //for delete cart
Route::post('/bill-store',[HomeController::class,'billStore'])->name('bill.store');
Route::get('/payment',[HomeController::class,'payment'])->name('payment');

//*****************************************//


//*********Admin************************** *//
Route::get('/back-end',[AdminController::class,'admin'])->name('admin');
Route::get('/layout',[AdminController::class,'layout'])->name('layout');


//*******************CMS******************************* */

//for banner
Route::get('/banner-index',[BannerController::class,'bannerIndex'])->name('banner.index');
Route::get('/banner-create',[BannerController::class,'bannerCreate'])->name('banner.create');
Route::post('/banner-store',[BannerController::class,'bannerStore'])->name('banner.store');
Route::get('/banner-edit/{id}',[BannerController::class,'bannerEdit'])->name('banner.edit');
Route::post('/banner-update',[BannerController::class,'bannerUpdate'])->name('banner.update');
Route::get('/banner-delete/{id}',[BannerController::class,'bannerDelete'])->name('banner.delete');

//for about
Route::get('/about-index',[AboutController::class,'aboutIndex'])->name('about.index');
Route::get('/about-create',[AboutController::class,'aboutCreate'])->name('about.create');
Route::post('/about-store',[AboutController::class,'aboutStore'])->name('about.store');
Route::get('/about-edit/{id}',[AboutController::class,'aboutEdit'])->name('about.edit');
Route::post('/about-update',[AboutController::class,'aboutUpdate'])->name('about.update');
Route::get('/about-delete/{id}',[AboutController::class,'aboutDelete'])->name('about.delete');

//for contact

Route::get('/contact-index',[ContactController::class,'contactIndex'])->name('contact.index');
Route::post('/contact-store',[ContactController::class,'contactStore'])->name('contact.store');

//for client
Route::get('/client-index',[ClientController::class,'clientIndex'])->name('client.index');
Route::get('/client-create',[ClientController::class,'clientCreate'])->name('client.create');
Route::post('/client-store',[ClientController::class,'clientStore'])->name('client.store');
Route::get('/client-edit/{id}',[ClientController::class,'clientEdit'])->name('client.edit');
Route::post('/client-update',[ClientController::class,'clientUpdate'])->name('client.update');
Route::get('/client-delete/{id}',[ClientController::class,'clientDelete'])->name('client.delete');

//for product

Route::get('/product-index',[ProductController::class,'productIndex'])->name('product.index');
Route::get('/product-create',[ProductController::class,'productCreate'])->name('product.create');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product-edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
Route::post('/product-update',[ProductController::class,'productUpdate'])->name('product.update');
Route::get('/product-delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');


//for order
Route::get('/order-index',[OrderController::class,'orderIndex'])->name('order.index'); //show-order
Route::get('/update-status/{id}',[OrderController::class,'updateStatus'])->name('update.status'); //show-order


//*****************************************//

//****************jet_stream**************** */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//******************************** */

//************email_varification********* */



Auth::routes(['verify'=>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

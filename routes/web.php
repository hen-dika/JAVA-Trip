<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Apps Routes Group
|--------------------------------------------------------------------------
*/
Route::get('/','HomeController@index')
    ->name('home');

Route::get('/detail/{slug}','DetailController@index')
    ->name('detail');

Route::get('/checkout','CheckoutController@index')
    ->name('checkout');
    
Route::get('/checkout/success','CheckoutController@success')
    ->name('checkout-success');

/*
|--------------------------------------------------------------------------
| Checkout Routes Group
|--------------------------------------------------------------------------
*/
 Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout-process')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);

/*
|--------------------------------------------------------------------------
| Midtrans Routes Group
|--------------------------------------------------------------------------
*/
Route::post('/midtrans/callback', 'MidtransController@notificationHandler');
Route::get('/midtrans/finish', 'MidtransController@finishRedirect');
Route::get('/midtrans/unfinish', 'MidtransController@unfinishRedirect');
Route::get('/midtrans/error', 'MidtransController@errorRedirect');   

/*
|--------------------------------------------------------------------------
| Admin Routes Group
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('travel-package', 'TravelPackageController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('transaction', 'TransactionController');
    Route::resource('banner-partner', 'BannerPartnerController');
    Route::get('about', 'AboutController@index')->name('about');
    Route::put('about/update/{id}', 'AboutController@update')->name('about-update');
});

/*
|--------------------------------------------------------------------------
| Email Verification
|--------------------------------------------------------------------------
*/
Auth::routes(['verify' => true]);



Route::get('/unfinish', function () {
    return view('pages.unfinish');
});
Route::get('/failed', function () {
    return view('pages.failed');
});
Route::get('/new-login', function () {
    return view('pages.login');
});
Route::get('/new-register', function () {
    return view('pages.register');
});
<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'newsletter'], function() {
   Route::get('/subscribe', function() {
       return redirect()->route('home');
   });
   Route::post('/subscribe', 'NewsletterController@subscribe')->name('newsletter.subscribe');
});

Route::get('/services', 'SiteController@services')->name('services');
Route::post('/services', 'SiteController@handleServiceRequest')->name('services.request');
Route::get('/payment-error', 'SiteController@paymentError')->name('services.payment-error');
Route::get('/payment-verified', 'SiteController@paymentSuccess')->name('services.payment-verified');

Route::get('/about', 'SiteController@about')->name('about');

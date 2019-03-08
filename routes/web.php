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

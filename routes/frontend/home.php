<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('location', 'LocationController@store')->name('location.store');


Route::group(['prefix' => 'product'], function(){
	Route::get('search', 'ProductController@search')->name('product.search');
	Route::get('detail', 'ProductController@detail')->name('product.detail');
	Route::get('{product}', 'ProductController@show')->name('product.show');
});

Route::group(['prefix' => 'health'], function(){
	Route::get('search', 'HealthController@search')->name('health.search');
});

Route::group(['prefix' => 'pharmacy'], function(){
	Route::get('autocomplete', 'PharmacyController@autocomplete')->name('pharmacy.autocomplete');
});

Route::get('pharmacy/{branch}/{slug}', 'PharmacyController@show')->name('pharmacy.branch.show');

Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('account', [AccountController::class, 'index'])->name('account');
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/search', 'SearchController@search')->name('search');

Route::resource('vhip', 'VhipController');
Route::resource('company', 'CompanyController');
Route::resource('sell', 'SellController');

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
    return view('site_landing');
});

Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('home');
// Route::get('/admin/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
Route::get('/site', 'LandingController@index')->name('site');
Route::resource('shares', 'ShareController');
Auth::routes(['verify' => true]);
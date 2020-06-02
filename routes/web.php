<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'Main\MainHomeController');


Route::resource('/admin', 'Admin\DashboardController');
Route::resource('/citymasters', 'Admin\CitymastersController');
Route::resource('/packagemasters', 'Admin\PackagemastersController');
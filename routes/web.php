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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/index','App\Http\Controllers\homeController@indexi')->name('index');

Route::get('/blog','App\Http\Controllers\homeController@blog')->name('blog');

Route::get('/contact','App\Http\Controllers\homeController@contact')->name('contact');

Route::get('/element','App\Http\Controllers\homeController@element')->name('element');

Route::get('/portfolio','App\Http\Controllers\homeController@portfolio')->name('portfolio');

Route::get('/service','App\Http\Controllers\homeController@service')->name('service');

Route::get('/about','App\Http\Controllers\homeController@about')->name('about');
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

Route::view('/', 'index');

// Routes to pages for web services validation
Route::view('/bot_test', 'bot_test');
Route::view('/facebook_test', 'facebook_test');
Route::view('/medium_test', 'medium_test');
Route::view('/paypal_test', 'paypal_test');

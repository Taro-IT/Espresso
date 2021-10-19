<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\PageInfoController;

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

Route::get('/bot_test', function () {
    return view('bot_test');
});

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
Route::view('/', 'index');

// Routes to pages for web services validation
Route::view('/facebook_test', 'facebook_test');
Route::view('/medium_test', 'medium_test');
Route::view('/paypal_test', 'paypal_test');

Route::view('/medium', 'medium');

// Route to page Que Hacemos.
Route::resource('/{name}', PageInfoController::class)->only(
    [
        "index"
    ]
);

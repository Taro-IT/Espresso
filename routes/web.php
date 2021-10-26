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
Route::view('/paypal_test', 'paypal_test');
Route::view('/quienes-somos', 'about_us')->name('quienes-somos');
Route::view('/que-hacemos', 'que_hacemos')->name('que-hacemos');
Route::view('/tienda' , 'tienda')->name('tienda');
Route::view('/puntos-venta', 'puntos_venta')->name('puntos-venta');

Route::view('/medium', 'medium');
//Rutas para acciones de donaciones
Route::get('/hacer-una-donacion',[\App\Http\Controllers\DonationsController::class,'index'])->name('donation.index');
Route::post('/donaciones/donativo',[\App\Http\Controllers\PaymentController::class,'pay'])->name('donation.pay');
Route::get('/donaciones/aprovado',[\App\Http\Controllers\PaymentController::class,'approval'])->name('donation.approval');
Route::get('/donaciones/cancelado',[\App\Http\Controllers\PaymentController::class,'cancelled'])->name('donation.cancelled');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

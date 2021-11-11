<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageInfoController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\PatientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Website basic info
Route::get('/', [PageInfoController::class, 'main'])->name('index');
Route::get('/quienes-somos', [PageInfoController::class, 'quienesSomos'])->name('quienes-somos');
Route::get('/que-hacemos', [PageInfoController::class, 'queHacemos'])->name('que-hacemos');
Route::get('/puntos-venta', [PageInfoController::class, 'puntosVenta'])->name('puntos-venta');

Route::get('/medium', [PageInfoController::class,'getMediumPosts']);

// Online shop, donations and payments
Route::get('/tienda' , [PageInfoController::class,'tienda'])->name('tienda');
Route::get('/download/file/{id}', [PageInfoController::class,'download'])->name('download');
Route::get('/hacer-una-donacion',[DonationsController::class,'index'])->name('donation.index');
Route::post('/donaciones/donativo',[PaymentController::class,'pay'])->name('donation.pay');
Route::get('/donaciones/aprovado',[PaymentController::class,'approval'])->name('donation.approval');
Route::get('/donaciones/cancelado',[PaymentController::class,'cancelled'])->name('donation.cancelled');

Auth::routes(["register" => false]);

//Seccion de Imagenes
Route::get('/imagenes',[\App\Http\Controllers\ImageController::class,'index'])->name('images.index');
Route::get('/agregar-imagenes',[\App\Http\Controllers\ImageController::class,'create'])->name('images.create');
Route::post('/almacenar-imagenes',[\App\Http\Controllers\ImageController::class,'store'])->name('images.store');
Route::delete('/imagenes-eliminar/{id}',[\App\Http\Controllers\ImageController::class,'destroy'])->name('images.destroy');

// Contact info admin section
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::put('/actualizar-home',[HomeController::class, 'update'])->name('homeUpdate');

// Password change
Route::get('/cambiar-contraseña', [HomeController::class, 'pwdChange'])->name('change_pwd.index');
Route::put('/actualizar-contraseña', [HomeController::class, 'updatePwd'])->name('change_pwd.update');

// Digital products admin section
Route::get('/productos',[ProductsController::class,'index'])->name('products.index');
Route::get('/agregar-productos',[ProductsController::class,'create'])->name('products.create');
Route::get('/editar-productos/{id}',[ProductsController::class,'edit'])->name('products.edit');
Route::post('/almacenar-productos',[ProductsController::class,'store'])->name('products.store');
Route::put('/actualizar-productos/{id}',[ProductsController::class,'update'])->name('products.update');
Route::delete('/productos-eliminar/{id}',[ProductsController::class,'destroy'])->name('products.destroy');

// Workshops admin section
Route::get('/talleres',[WorkshopController::class,'index'])->name('workshop.index');
Route::get('/agregar-talleres',[WorkshopController::class,'create'])->name('workshop.create');
Route::get('/editar-talleres/{id}',[WorkshopController::class,'edit'])->name('workshop.edit');
Route::post('/almacenar-talleres',[WorkshopController::class,'store'])->name('workshop.store');
Route::put('/actualizar-talleres/{id}',[WorkshopController::class,'update'])->name('workshop.update');
Route::delete('/talleres-eliminar/{id}',[WorkshopController::class,'destroy'])->name('workshop.destroy');

// Guests admin section
Route::get('/pacientes',[PatientController::class,'index'])->name('patients.index');
Route::get('/agregar-pacientes',[PatientController::class,'create'])->name('patients.create');
Route::get('/editar-pacientes/{id}',[PatientController::class,'edit'])->name('patients.edit');
Route::post('/almacenar-pacientes',[PatientController::class,'store'])->name('patients.store');
Route::put('/actualizar-pacientes/{id}',[PatientController::class,'update'])->name('patients.update');
Route::delete('/pacientes-eliminar/{id}',[PatientController::class,'destroy'])->name('patients.destroy');


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


Route::get('/', [PageInfoController::class, 'main'])->name('index');
// Route::match(['get', 'post'], 'index', [PageInfoController::class, 'main']);


// Routes to pages for web services validation
Route::view('/quienes-somos', 'about_us')->name('quienes-somos');
Route::view('/que-hacemos', 'que_hacemos')->name('que-hacemos');
Route::get('/tienda' , [\App\Http\Controllers\PageInfoController::class,'tienda'])->name('tienda');
Route::view('/puntos-venta', 'puntos_venta')->name('puntos-venta');

Route::get('/medium', [\App\Http\Controllers\PageInfoController::class,'getMediumPosts']);

//Rutas para acciones de donaciones
Route::get('/hacer-una-donacion',[\App\Http\Controllers\DonationsController::class,'index'])->name('donation.index');
Route::post('/donaciones/donativo',[\App\Http\Controllers\PaymentController::class,'pay'])->name('donation.pay');
Route::get('/donaciones/aprovado',[\App\Http\Controllers\PaymentController::class,'approval'])->name('donation.approval');
Route::get('/donaciones/cancelado',[\App\Http\Controllers\PaymentController::class,'cancelled'])->name('donation.cancelled');


Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::put('/actualizar-home',[App\Http\Controllers\HomeController::class, 'update'])->name('homeUpdate');

// Cambio de contraseña
Route::get('/cambiar-contraseña', [App\Http\Controllers\HomeController::class, 'pwdChange'])->name('change_pwd.index');
Route::put('/actualizar-contraseña', [App\Http\Controllers\HomeController::class, 'updatePwd'])->name('change_pwd.update');

// Sección de productos
Route::get('/productos',[\App\Http\Controllers\ProductsController::class,'index'])->name('products.index');
Route::get('/agregar-productos',[\App\Http\Controllers\ProductsController::class,'create'])->name('products.create');
Route::get('/editar-productos/{id}',[\App\Http\Controllers\ProductsController::class,'edit'])->name('products.edit');
Route::post('/almacenar-productos',[\App\Http\Controllers\ProductsController::class,'store'])->name('products.store');
Route::put('/actualizar-productos/{id}',[\App\Http\Controllers\ProductsController::class,'update'])->name('products.update');
Route::delete('/productos-eliminar/{id}',[\App\Http\Controllers\ProductsController::class,'destroy'])->name('products.destroy');

//Seccion de talleres
Route::get('/talleres',[\App\Http\Controllers\WorkshopController::class,'index'])->name('workshop.index');
Route::get('/agregar-talleres',[\App\Http\Controllers\WorkshopController::class,'create'])->name('workshop.create');
Route::get('/editar-talleres/{id}',[\App\Http\Controllers\WorkshopController::class,'edit'])->name('workshop.edit');
Route::post('/almacenar-talleres',[\App\Http\Controllers\WorkshopController::class,'store'])->name('workshop.store');
Route::put('/actualizar-talleres/{id}',[\App\Http\Controllers\WorkshopController::class,'update'])->name('workshop.update');
Route::delete('/talleres-eliminar/{id}',[\App\Http\Controllers\WorkshopController::class,'destroy'])->name('workshop.destroy');

//Seccion de pacientes
Route::get('/pacientes',[\App\Http\Controllers\PatientController::class,'index'])->name('patients.index');
Route::get('/agregar-pacientes',[\App\Http\Controllers\PatientController::class,'create'])->name('patients.create');
Route::get('/editar-pacientes/{id}',[\App\Http\Controllers\PatientController::class,'edit'])->name('patients.edit');
Route::post('/almacenar-pacientes',[\App\Http\Controllers\PatientController::class,'store'])->name('patients.store');
Route::put('/actualizar-pacientes/{id}',[\App\Http\Controllers\PatientController::class,'update'])->name('patients.update');
Route::delete('/pacientes-eliminar/{id}',[\App\Http\Controllers\PatientController::class,'destroy'])->name('patients.destroy');

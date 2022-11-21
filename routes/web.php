<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');   
});
 //RUTAS DE REGISTRO DE USUARIOS 
Route::resource('users','UserController')->names('users');
// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
//     Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
//     Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
//     Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
//     Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
// });
//RUTA DE REGISTRO DE PESONAS 
Route::resource('personas','PersonaController')->names('personas');

//RUTA DE REGISTRO DE CILENTES
Route::resource('clients','ClientController')->names('clients');

//RUTAS DE REGISTRO DE PRODUCTO,CATEGORIAS Y MARCAS
Route::resource('products','ProductController')->names('products');
Route::resource('categories','CategoryController')->names('categories');
Route::resource('brands','BrandController')->names('brands');

//RUTA DE REGISTRO DE PROVEEDORES
Route::resource('providers','ProviderController')->names('providers');
 //RUTA DE REGISTRO DE REPARTIDORES
Route::resource('dealers','DealerController')->names('dealers');
//RUTA DE REGISTRO DE COMPRAS
Route::resource('purchases','PurchaseController')->names('purchases');
//RUTA DE REGISTRO DE VENTAS
Route::resource('sales','SaleController')->names('sales');

Route::get('/prueba', function () {
    return view('prueba');
});

'Auth'::routes();
Route::get('/home', 'HomeController@index')->name('home');
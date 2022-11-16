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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dealers','DealerController')->names('dealers');
Route::resource('personas','PersonaController')->names('personas');
Route::resource('categories','CategoryController')->names('categories');
Route::resource('brands','BrandController')->names('brands');
Route::resource('clients','ClientController')->names('clients');
Route::resource('products','ProductController')->names('products');
Route::resource('providers','ProviderController')->names('providers');
Route::resource('purchases','PurchaseController')->names('purchases');
Route::resource('sales','SaleController')->names('sales');

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/prueba-dos', function () {
    return view('prueba-dos');
});
'Auth'::routes();

Route::get('/home', 'HomeController@index')->name('home');

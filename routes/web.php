<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
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


Route::get('/','AppController@showHome');
Route::get('/home','AppController@showHome');
Route::get('/about', function () {
    return view('store.about');
});
Route::get('/features/shortcodes', function () {
    return view('store.feature_shortcodes');
});
Route::get('/shop', 'AppController@showShop');
Route::get('/shop-grid', function () {
    return view('store.shop_grid');
});
Route::get('/carrito', function () {
    return view('store.carrito');
});
Route::get('/checkout', function () {
    return view('store.checkout');
});

//-----------Mi cuenta Procesos
Route::get('/micuenta', function () {
    if(!isset($_COOKIE["authlog"]))    
        return Redirect::to('home');
    else
        return view('store.micuenta');
});
Route::get('/pedidos', function () {
    if(!isset($_COOKIE["authlog"]))    
        return Redirect::to('home');
    else
        return view('store.pedidos');
});
Route::get('/misdirecciones', function () {
    if(!isset($_COOKIE["authlog"]))    
        return Redirect::to('home');
    else
        return view('store.misdirecciones');
});
Route::get('/detallescuenta', function () {
    if(!isset($_COOKIE["authlog"]))    
        return Redirect::to('home');
    else
        return view('store.detallescuenta');
});
Route::get('/metodospago', function () {
    if(!isset($_COOKIE["authlog"]))    
        return Redirect::to('home');
    else
        return view('store.metodospago');
});

//-----------------------------------

Route::get('/gallery', 'GaleriaController@loadGalleryView');

Route::get('/contacts', function () {
    return view('store.contacts');
});
Route::get('shop/{page}', 'ProductController@verProducto');

Route::get('admin/', 'AdminController@loadDefault');
Route::get('admin/{page}', 'AdminController@index');

Route::get('admon/', 'AdminController@loadAdmonPage');
Route::get('admon/{page}', 'AdminController@loadAdmonPage');

Route::get('admon/add/{model}', 'AdminController@addToModel');

Route::get('admon/edit/{model}/{token}', 'AdminController@editToModel');
Route::get('admon/import/products', 'AdminController@viewToImportProducts')->name("importing");
Route::post('admon/import/import_parse', 'ImportController@parseImport')->name("import_parse");


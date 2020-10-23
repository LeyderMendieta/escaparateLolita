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
    return view('store.home');
});
Route::get('/home', function () {
    return view('store.home');
});
Route::get('/about', function () {
    return view('store.about');
});
Route::get('/features/shortcodes', function () {
    return view('store.feature_shortcodes');
});
Route::get('/shop', function () {
    return view('store.shop');
});
Route::get('/shop-grid', function () {
    return view('store.shop_grid');
});
Route::get('/gallery', function () {
    return view('store.gallery');
});
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


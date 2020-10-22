<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

    Route::get('/products/{type}','ProductController@index');
    Route::get('/view_products','ProductController@getProducts');    
    Route::get('/products_brands','ProductController@getBrands');
    Route::get('/product_detail/{product}','ProductController@viewProductDetail');

    Route::get('/availableDaysFor/{type}/{dia}/{mes}/{ano}','AgendaController@getAvailableFor');

    Route::get('/getMyCart','CartController@getMyCart');
    Route::get('/getMyCartProducts','CartController@getMyCartProducts');
    Route::get('/cartProduct/del/{id}','CartController@removeProductCart');

    Route::post('/addProductToCart','CartController@addProductToCart');
    
    Route::post('/login', 'UsuarioController@login');
    Route::post('/register', 'UsuarioController@register');
    Route::post('/AuthLogged', 'UsuarioController@userLogged');

    Route::post('/asignarAgenda','AgendaController@store');
    
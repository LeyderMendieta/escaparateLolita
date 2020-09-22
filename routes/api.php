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
    Route::post('/product','ProductController@store');
    Route::get('/products_brands','ProductController@getBrands');
    Route::get('/product_detail/{product}','ProductController@viewProductDetail');
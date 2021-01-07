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
    Route::get('/all_products','ProductController@getAllProducts');    
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

    //Administración
    Route::post('/store/producto','ProductController@crearProducto');
    Route::post('/update/producto','ProductController@editarProducto');
    Route::post('/store/productoImagen','ProductController@guardarFile');
    Route::get('/remove/producto/{id}','ProductController@removeProduct');
    
    Route::get('/all_categories','CategoryController@getAll');
    Route::get('/category_detail/{category}','CategoryController@viewCategoryDetail');    
    Route::post('/store/categoria','CategoryController@crear');
    Route::post('/update/categoria','CategoryController@editar');
    Route::get('/remove/categoria/{id}','CategoryController@remove');
    
    Route::get('/all_brands','BrandsController@getAll');
    Route::get('/brand_detail/{category}','BrandsController@viewBrandDetail');    
    Route::post('/store/brand','BrandsController@crear');
    Route::post('/update/brand','BrandsController@editar');
    Route::get('/remove/brand/{id}','BrandsController@remove');
    
    Route::get('/all_articulos','ArticuloController@getAll');
    Route::get('/articulo_detail/{category}','ArticuloController@viewDetail');    
    Route::post('/store/articulo','ArticuloController@crear');
    Route::post('/update/articulo','ArticuloController@editar');
    Route::get('/remove/articulo/{id}','ArticuloController@remove');
    
    Route::get('/all_giftCards','GiftCardController@getAll');
    Route::get('/giftCard_detail/{category}','GiftCardController@viewDetail');    
    Route::post('/store/giftCard','GiftCardController@crear');
    Route::post('/update/giftCard','GiftCardController@editar');
    Route::get('/remove/giftCard/{id}','GiftCardController@remove');

    Route::get('/all_tags','GaleriaController@getAllTags');
    Route::get('/tag_detail/{category}','GaleriaController@viewTagDetail');    
    Route::post('/store/tag','GaleriaController@crearTag');
    Route::post('/update/tag','GaleriaController@editarTag');
    Route::get('/remove/tag/{id}','GaleriaController@removeTag');
    
    Route::get('/all_galeria','GaleriaController@getAllGaleria');
    Route::get('/galeria_detail/{category}','GaleriaController@viewGaleriaDetail');    
    Route::post('/store/galeria','GaleriaController@crearGaleria');
    Route::post('/update/galeria','GaleriaController@editarGaleria');
    Route::get('/remove/galeria/{id}','GaleriaController@removeGaleria');
    Route::post('/store/guardarImagen','GaleriaController@guardarFile');

    Route::post('/update/productosSugeridos','ProductController@actualizarProductosSugeridos');
    Route::post('/update/productosMustHave','ProductController@actualizarProductosMustHave');

    Route::get('/getSettingsEnviroment','AdminController@loadSettings');
    Route::post('/updateSettingsEnviroment','AdminController@updateSettings');
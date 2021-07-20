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

    Route::post('/addNewContact','ContactController@store');
    Route::get('/getContactsList','ContactController@index');
    Route::get('/getContact/{id}','ContactController@show');

    Route::get('/products/{type}','ProductController@index');
    Route::get('/view_products','ProductController@getProducts');    
    Route::get('/all_products','ProductController@getAllProducts');    
    Route::get('/products_brands','ProductController@getBrands');
    Route::get('/product_detail/{product}','ProductController@viewProductDetail');
    Route::get("/getConfigurationField/{field}","AppController@getConfigurationField");
    Route::post("/addRatingToProduct","ProductController@addRatingToProduct");
    Route::get("/getRatingsProduct/{id}","ProductController@getRatingProduct");

    Route::get('/availableDaysFor/{type}/{dia}/{mes}/{ano}','AgendaController@getAvailableFor');

    Route::get('/getMyCart','CartController@getMyCart');
    Route::get('/getMyCartProducts','CartController@getMyCartProducts');
    Route::get('/cartProduct/del/{id}','CartController@removeProductCart');

    Route::post('/addProductToCart','CartController@addProductToCart');
    Route::post('/changeCantidadProducts','CartController@changeCantidadProducts');
    // USUARIOS ADMIN -----------------------
    Route::post('/admin/login', 'UsuarioController@loginAdm');
    Route::post('/admin/restablecerPassword', 'UsuarioController@restablecerContrasenaAdm');
    Route::post('/admin/doResetPassword', 'UsuarioController@doRestablecerContrasenaAdm');

    //USUARIOS STORE
    Route::post('/login', 'UsuarioController@login');
    
    Route::post('/registrarUserProccess', 'UsuarioController@registerUser');
    Route::post('/AuthLogged', 'UsuarioController@userLogged');

    Route::post('/restablecerPassword', 'UsuarioController@restablecerContrasena');
    Route::post('/doResetPassword', 'UsuarioController@doRestablecerContrasena');

    Route::post('/handlerLoginFromPlatform', 'UsuarioController@handlerLoginFromPlatform');

    Route::get('/AuthInfoLogged', 'UsuarioController@getUserInfo');
    Route::post('/UpInfoLogged', 'UsuarioController@updateUserInfo');

    Route::get('/getMyCards', 'UsuarioController@getTarjetasUsuario');
    Route::post('/addNewCard', 'UsuarioController@addNewCardUser');
    Route::get('/myCardsdel/{id}','UsuarioController@removeCardsUser');
    Route::get('/verifyCardAvailable/{cardNumber}','UsuarioController@verifyCardAvailable');

    Route::get('/getMyDirecciones', 'UsuarioController@getDireccionesUsuario');
    Route::post('/addNewAddressU', 'UsuarioController@addNewDireccionUser');
    Route::get('/myDireccionudel/{id}','UsuarioController@removeDireccionUser');
    Route::post('/editAddressU', 'UsuarioController@editDireccionUser');

    Route::get('/getMyCupones', 'UsuarioController@getMyCupones');
    Route::post('/addCupon', 'UsuarioController@addNewCuponUser');    
    Route::post('/aplicarCuponCarrito', 'UsuarioController@aplicarCuponCarrito');
    Route::get('/cart/RemoveCupon', 'CartController@removeCuponCarrito');

    Route::get("/getMyPedidos","UsuarioController@getMyPedidos");
    Route::post("/signDataST",function(Request $request){

        define ('HMAC_SHA256', 'sha256');
        define ('SECRET_KEY', '9ef3e26c4bb94d48bbb6442cb8a980417ca7ce4c44914affb2716530ab6f655a194bda16d35c445f868596accff4a0a675f3191d29de44c28e7c6595378d3c5e2e002350dd2a4730b1bc7f10d02451a2f41a76be73a54d8287e0d69db606f84ac923f3d70d7447a5ac94402d71b823ab431b60b19bba460a92f0fe491d37f653');

        function sign ($data) {
            return signData($data, SECRET_KEY);
        }

        function signData($data, $secretKey) {
            return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
        }

        return response()->json(["sign" => sign($request->data), "date" => gmdate("Y-m-d\TH:i:s\Z")]);
    });

    Route::post('/asignarAgenda','AgendaController@store');

    Route::get("/getNotifications/{type}","NotificationController@getNotifications");
    Route::get("/updateNotifySeen/{type}/{id}","NotificationController@updateNotifySeen");

    Route::get("/carritosAbandonados/{user}","CartController@getCartsAbandonados");


    //Administración
    Route::get("/admin/usersList","AdminController@getUsers");
    Route::get("/admin/pedidosList","AdminController@getPedidos");
    Route::get("/admin/pedidosDetalle/{pedido}","AdminController@getPedidoDetalle");
    Route::post("/admin/Pedido/setState","AdminController@actualizarEstadoPedido");
    Route::get("/admin/getAgendasList","AgendaController@verListadoAgendas");
    Route::get("/admin/clearSpaceAgenda/{idAgenda}","AgendaController@liberarAgenda");
    Route::get("/admin/acceptAgenda/{idAgenda}","AgendaController@aceptarAgenda");

    Route::get("/admin/carritosAbandonados/{full}","CartController@getCartsAbandonados");
    Route::get("/admin/getBitacoraPagos","PagosController@getBitacoraPagos");
  

    Route::get("/admin/getTotalSect1","AdminController@getTotalSect1");


    Route::get("/admin/getCuponsUsers","AdminController@getCuponsUsers");
    Route::get("/admin/cupones","CuponController@index");
    Route::get("/admin/cupones/{cupon}","CuponController@show");
    Route::post("/new/cupon","CuponController@store");
    Route::post("/edit/cupon","CuponController@update");
    Route::get("/remove/cupon/{cupon}","CuponController@destroy");

    Route::get("/admin/producto/{producto}","ProductController@show");
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
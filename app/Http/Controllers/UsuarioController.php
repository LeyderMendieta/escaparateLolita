<?php

namespace App\Http\Controllers;



use App\Cupon;
use App\User;
use App\UserAddress;
use App\UserCards;
use App\UserCupon;
use App\UserInfo;
use App\Product;
use App\Category;
use App\cart;
use App\Mail\RestablecerPasswordStore;
use App\UserPedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\VerificaTuCuenta;

class UsuarioController extends Controller
{
    public function restablecerContrasenaAdm(Request $request)
    {
        $user = User::where(['email' => $request->user,"graphDomain" => "Administrador"])->first();
        if($user)
        {
            $user->generateToken();
            $sendStatus = Mail::to($user)->send(new RestablecerPasswordStore($user->nombres,url("admin/restartPassword/".$user->api_token)));
            return response()->json($sendStatus);
        }
        else return response()->json(["error" => "matching_nfound"]);
    }

    public function loginAdm(Request $request)
    {
        $user = User::where(['email' => $request->user,"graphDomain" => "Administrador"])->first();
        if($user)
        {
            
            if(hash::check($request->password,$user->password))
            {
                Auth::login($user,true);
                $user->generateToken();
                setCookie ("USADM-OAUTH",$user->api_token);
                return $user;
            }
            else 
            return response()->json(["error" => "userpsw"]);
        }
        else return response()->json(["error" => "nofound"]);  
    }

    public function procederCambioContrasenaAdm($token)
    {
        $user = User::where(["api_token" => $token,"graphDomain" => "Administrador"])->first();
        if($user)
        {
            return view("admon.newPassword",["token" => $token]);
        }
        else return view("error",["message" => "El enlace no se encuentra disponible"]);
    }
    public function doRestablecerContrasenaAdm(Request $request)
    {
        $user = User::where(['api_token' => $request->token,"graphDomain" => "Administrador"])->first();
        if($user)
        {
            $user->password = Hash::make($request->newPass);
            $user->save();
            $user->generateToken();
            return response()->json(["success" => "done"]);
        }
        else return response()->json(["error" => "matching_nfound"]);
    }
    //---------------------------------------
    public function restablecerContrasena(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();        
        if($user)
        {
            $user->generateToken();
            $sendStatus = Mail::to($user)->send(new RestablecerPasswordStore($user->nombres,url("/restartPasswordAccount/oauth/".$user->api_token)));
            return response()->json($sendStatus);
        }
        else return response()->json(["error" => "matching_nfound"]);
    }
    
    public function doRestablecerContrasena(Request $request)
    {
        $user = User::where(['api_token' => $request->token])->first();
        if($user)
        {
            $user->password = Hash::make($request->nuevaPass);
            $user->save();
            $user->generateToken();
            return response()->json(["success" => "done"]);
        }
        else return response()->json(["error" => "matching_nfound"]);
    }

    public function procederCambioContrasena($token)
    {
        $user = User::where(["api_token" => $token])->first();
        if($user)
        {
            return view("store.restablecerPassword",["token" => $token]);
        }
        else return view("error",["message" => "El enlace no se encuentra disponible"]);
    }

    public function procederConfirmarCuenta($token)
    {
        $user = User::where(["AccessToken" => $token, "email_verified_at" => NULL])->first();
        if($user)
        {
            $user->email_verified_at = now();
            $user->save();
            return Redirect::to('/requestResponse/cuentaVerificadaSuccess-4B1DC2F3CBB785B7D5FEA655C6C4E0927B384A9B');
        }
        else return view("error",["message" => "El enlace no se encuentra disponible"]);
    }

    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();

        if($user)
        {
            
            if(hash::check($request->password,$user->password))
            {
                Auth::login($user,true);

                if(isset($_COOKIE["session_mycart"]))
                {
                    $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();
                    $mycart->id_usuario = $user->id;
                    $mycart->save();
                }           
                
                if($user->email_verified_at == NULL)
                {
                    Mail::to($user)->send(new VerificaTuCuenta($user->name,url("/confirmAccount/oauth/".$user->AccessToken)));
                    return response()->json(["error" => "no_verified"]);
                }
                else
                {
                    $user->generateToken();
                    setCookie ("authlog",$user->api_token,0,"/");
                    return $user;
                }
            }
            else 
            return response()->json(["error" => "userpsw"]);
        }
        else return response()->json(["error" => "nofound"]);  
    }

    
    public function registerUser(Request $request)
    {
        if(isset($request->name) && isset($request->nuevoPass) && isset($request->correo) && isset($request->nombres) && isset($request->apellidos) && isset($request->ubicacion) && isset($request->apartamento) && isset($request->celular))
        {
            $userExists = User::where(["email" => $request->correo])->first();
            if($userExists) return response()->json(["error" => "mailkey"]);
            else
            {
                $user = User::create([
                    "name" => $request->name,
                    "password" => Hash::make($request->nuevoPass),
                    "email" => $request->correo,
                    "AccessToken" => Str::random(240),
                    "api_token" => Str::random(20)
                ]);
        
                UserInfo::create([
                    "id_user" => $user->id,
                    "nombres" => $request->nombres,
                    "apellidos" => $request->apellidos,
                    "ubicacion" => $request->ubicacion,
                    "apartamento" => $request->apartamento,
                    "telefono" => $request->telefono,
                    "celular" => $request->celular,
                ]);
        
                $user->generateToken();
                setCookie ("authlog",$user->api_token,0,"/");
        
                return response()->json($user);
            }
           
        }
        else return response()->json(["error" => "jobfailed"]);
    }

    public function handlerLoginFromPlatform(Request $request)
    {
        if(isset($request->accessToken) && isset($request->email) && isset($request->graphDomain) && isset($request->id) && isset($request->name))
        {
            $user = User::where(["graphDomain" => $request->graphDomain,"idPlatform" => $request->id,"email" => $request->email])->first();
            if($user)
            {
                $user->generateToken();
                setCookie ("authlog",$user->api_token,0,"/");
                return response()->json(["user" => $user,"method" => "exist"]);
            }
            else
            {
                $userValidator = User::where(["email" => $request->email])->first();
                if($userValidator)
                {
                    return response()->json(array("error" => "assocExistMail"));
                }
                else
                {
                    $user = User::create([
                        "name" => $request->name,
                        "password" => "noset",
                        "email" => $request->email,
                        "email_verified_at" => now(),
                        "graphDomain" => $request->graphDomain,
                        "AccessToken" => $request->accessToken,
                        "idPlatform" => $request->id,
                        "api_token" => Str::random(20)
                    ]);

                    UserInfo::create([
                        "id_user" => $user->id,
                        "nombres" => $request->first_name,
                        "apellidos" => $request->last_name
                    ]);

                    $user->generateToken();
                    setCookie ("authlog",$user->api_token,0,"/");
                    return response()->json(["user" => $user,"method" => "new"]);
                }
            }
        }
        else return response()->json(array("error" => "failed"));
    }

    public function userLogged(Request $request)
    {
        $user = User::where(['api_token' => $request->token])->whereNotNull("api_token")->first();

        if($user)
        {            
            return response()->json($user);
        }
        else
            return response()->json(["error" => "oauth"]);
        
        
    }

    public function getUserInfo()
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $userinfo = UserInfo::where(['id_user' => $user->id])->first();

            if($user->password == "noset") $nosetPsw = true;
            else $nosetPsw = false;

            $response = array("iduser" => $userinfo->id_user,"nombres" => $userinfo->nombres, "apellidos" => $userinfo->apellidos, "ubicacion" => $userinfo->ubicacion, "apartamento" => $userinfo->apartamento, "telefono" => $userinfo->telefono, "celular" => $userinfo->celular,"name" => $user->name,"correo" => $user->email,"nosetPsw" => $nosetPsw);
            return response()->json(array("user" => $response));
        }
        else 
            return response()->json(array("error" => "error found"));
    }

    public function updateUserInfo(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";
        if($session != "null" && isset($request->updates["iduser"]))
        {
            $user = User::where(['api_token' => $session,'id' => $request->updates["iduser"]])->whereNotNull("api_token")->first();           
            if($user)
            {
                $userInfo = UserInfo::where(['id_user' => $user->id])->first();
                $user->name = $request->updates["name"];
                if($user->email != $request->updates["correo"])
                {
                    $validatingExists = User::where(['email' => $request->updates["correo"]])->first();
                    if($validatingExists)
                    {
                        return response()->json(array("warning" => "mailkey"));
                    }
                    else
                    {
                        $user->email = $request->updates["correo"];
                        $user->email_verified_at = NULL;
                    }                    
                }
                if($request->updates["nuevoPass"] != "")
                {
                    if(hash::check($request->updates["pass"],$user->password) || $user->password == "noset")
                    {
                        $user->password = Hash::make($request->updates["nuevoPass"]);
                    }
                    else
                    {
                        return response()->json(array("warning" => "pswcurrent"));
                    }
                }
                $userInfo->nombres = $request->updates["nombres"];
                $userInfo->apellidos = $request->updates["apellidos"];
                $userInfo->ubicacion = $request->updates["ubicacion"];
                $userInfo->apartamento = $request->updates["apartamento"];
                $userInfo->telefono = $request->updates["telefono"];
                $userInfo->celular = $request->updates["celular"];

                $user->save();
                $userInfo->save();
                return response()->json(array("success" => "Changed"));
            }
            else
                return response()->json(array("error" => "error found 513"));
            
        }
        else 
            return response()->json(array("error" => "error found 512"));
    }

    public function getTarjetasUsuario()
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $cards = UserCards::where(['id_user' => $user->id])->get();
            $results = [];
            foreach($cards as $fila)
            {
                array_push($results,[
                    "id" => $fila->id,
                    "mes" => $fila->mes_expiracion,
                    "ano" => $fila->ano_expiracion, 
                    "numeroH" => "**** **** **** ".substr($fila->numero,-4,4),
                    "nombre" => $fila->nombre_tarjeta,
                    "tipo" => $fila->tipo
                    ]);
            }
            return response()->json(array("cards" => $results));
        }
        else 
            return response()->json(array("error" => "error found"));
        
    }

    public function addNewCardUser(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

            $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $validateExists = UserCards::where(["numero"=> $request->numero])->first();
            if($validateExists)
            {
                return response()->json(array("error" => "dontavailable"));
            }
            else
            {
                UserCards::create([
                    "id_user" => $user->id,
                    "tipo" => $request->tipo,
                    "numero" => $request->numero,
                    "ccv" => $request->ccv,
                    "pais" => $request->pais,
                    "nombre_tarjeta" => $request->nombre,
                    "mes_expiracion" => $request->mes,
                    "ano_expiracion" => $request->year
                ]);
                return $this->getTarjetasUsuario();
            }
           
        }
        else 
            return response()->json(array("error" => "error found"));
        
    }

    public function removeCardsUser($card)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $result = DB::table('user_cards')->where(['id' => $card,"id_user" => $user->id])->delete();
            if($result) return $this->getTarjetasUsuario();
            return response()->json(array("error" => "removing"));
        }
        else 
            return response()->json(array("error" => "error found"));
        
    }

    public function getDireccionesUsuario()
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $resultsT1 = UserAddress::where(["id_user" => $user->id,"tipo" => "facturacion"])->get();
            $resultsT2 = UserAddress::where(["id_user" => $user->id,"tipo" => "envio"])->get();
            
            return response()->json(array("direccionesT1" => $resultsT1, "direccionesT2" => $resultsT2,"contadorT1" => count($resultsT1), "contadorT2" => count($resultsT2)));
        }
        else 
            return response()->json(array("error" => "error found"));
        
    }

    public function addNewDireccionUser(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            UserAddress::create([
                "id_user" => $user->id,
                "tipo" => $request->tipo,
                "referencia" => $request->referencia,
                "direccion" => $request->direccion,
                "apartamento" => $request->apartamento,
                "ciudad" => $request->ciudad,
                "pais" => $request->pais,
                "codigo_postal" => $request->codigo_postal,
                "telefono" => $request->telefono
            ]);
            return $this->getDireccionesUsuario();
        }
        else 
            return response()->json(array("error" => "error found"));
    }

    public function removeDireccionUser($direccion)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $result = DB::table('user_addresses')->where(['id' => $direccion,"id_user" => $user->id])->delete();
            if($result) return $this->getDireccionesUsuario();
            return response()->json(array("error" => "removing"));
        }
        else 
            return response()->json(array("error" => "error found"));
        
    }

    public function editDireccionUser(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $result = UserAddress::where(["id" => $request->id,"id_user",$user->id])->first();
            if($result) 
            {
                $result->referencia = $request->referencia;
                $result->direccion = $request->direccion;
                $result->apartamento = $request->apartamento;
                $result->ciudad = $request->ciudad;
                $result->pais = $request->pais;
                $result->codigo_postal = $request->codigo_postal;
                $result->save();
                return $this->getDireccionesUsuario();
            }
            else return response()->json(array("error" => "error found"));
            
        }
        else 
            return response()->json(array("error" => "error found"));
    }

    public function getMyCupones()
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $userCupons = UserCupon::where(["id_user" => $user->id])->get();

            $cupons = [];

            foreach($userCupons as $cupon)
            {
                array_push($cupons,Cupon::where(["id" => $cupon->id_cupon])->first());
            }
            $data = [];
            foreach($cupons as $fila)
            {
                if($fila->tipo == "Cupon de Producto")
                    $target = Product::where("id",$fila->id_target)->first();
                else if($fila->tipo == "Cupon de Categoria")
                    $target = Category::where("id",$fila->id_target)->first();
                else $target = ["empty" => true];
                array_push($data,["id" => $fila->id,"codigo" => $fila->codigo, "tipo" => $fila->tipo, "target" => $target, "importe" => $fila->importe, "descripcion" => $fila->descripcion, "fecha_caducidad" => $fila->fecha_caducidad, "usado" => $fila->usado]);
            }

            return response()->json(["cupones" => $data]);
        }
        else 
            return response()->json(array("error" => "error found"));
    }

    public function addNewCuponUser(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user && isset($request->codigo))
        {
            $cupon = Cupon::where(["codigo" => $request->codigo, "usado" => 0])->first();
            if($cupon)
            {
                $cuponadd = new UserCupon();
                $cuponadd->id_user = $user->id;
                $cuponadd->id_cupon = $cupon->id;
                $cuponadd->save();

                if($cuponadd)
                {
                    $cupon->usado = 1;
                    $cupon->save();
                    return response()->json(array("success" => "done"));
                }
                else return response()->json(array("error" => "failedsaving"));
            }
            else
            {
                return response()->json(array("error" => "noavailable"));
            }            
        }
        else 
            return response()->json(array("error" => "error found"));
    }

    public function getMyPedidos()
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";
        if($session == "null") return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user)
        {
            $userPedidos = UserPedido::where(["id_user" => $user->id]) ->orderBy('id', 'desc')->get(); 

            $data = [];
            foreach($userPedidos as $fila)
            {
                $dbFactura = DB::select("SELECT * FROM transferencias WHERE id_pedido='$fila->id'");
                if(isset($dbFactura[0]))
                {
                    array_push($data,["id" => $fila->id, "card" => $fila->id_user_card, "fecha" => $fila->created_at->format('d-m-Y h:s a'), "estado" => $fila->estado, "estadoPedido" => $fila->estadoPedido, "total" => $fila->total, "impuesto" => $fila->impuesto, "transferencia" => $dbFactura[0] ]);
                }
            }

            return response()->json(["pedidos" => $data]);
        }
        else return response()->json(array("error" => "error found"));
    }

    public function aplicarCuponCarrito(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();       
        if($user && isset($request->codigo))
        {
            $cupon = Cupon::where(["codigo" => $request->codigo])->first();
            if($cupon)
            {
                $cuponUser = UserCupon::where(["id_user" => $user->id, "id_cupon" => $cupon->id])->first();
                if($cuponUser)
                {
                    if($cuponUser->fecha_uso == null) 
                    {
                        if(isset($_COOKIE["session_mycart"]))
                        {
                            $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();
                            if($mycart)
                            {
                                $myproducts_cart = DB::select("SELECT t0.id as cartId,t0.talla_selected,t0.color_selected,t0.cantidad,t1.* FROM cart_products t0 INNER JOIN products t1 ON t0.id_product=t1.id WHERE t0.id_cart=".$mycart->id);

                                $status = false;                                
                                foreach($myproducts_cart as $fila)
                                {
                                    if($cupon->tipo == "Cupon de Categoria")
                                    {
                                        $categorias = json_decode($fila->categorias);
                                        foreach($categorias as $filacategoria)
                                        {
                                            if($cupon->id_target == $filacategoria) $status = true;
                                        }
                                    }
                                    if($cupon->tipo == "Cupon de Producto")
                                    {
                                        if($cupon->id_target == $fila->id) $status = true;
                                    }
                                }
                                if($cupon->tipo == "Cupon Global") $status = true;

                                if($status)
                                {
                                    $mycart->id_cupon = $cupon->id;
                                    $mycart->save();
                                    return response()->json(array("success" => "added"));
                                }
                                else $error = "producno-asocToCart";
                            }
                            else $error ="cartno-setter";
                        }
                        else $error = "cookino-mycart";
                    }
                    else $error = "cupno-dateused";
                } 
                else $error = "cupno-asocToUser";
            }
            else $error = "cupno-found";
        }
        else  $error = "error found";

        return response()->json(array("error" => $error));
            
    }

    public function verifyCardAvailable($cardNumber)
    {
        $mycart = cart::where("api_token",$_COOKIE["session_mycart"])->first();

        $firstNumbers = substr($cardNumber,0,6);
        $lastNumbers = substr($cardNumber,-4);
        $validate = DB::select("SELECT * FROM user_payment_tokens WHERE req_card_number like '$firstNumbers%' AND req_card_number like '%$lastNumbers'");

        if(count($validate) > 0){ 
            if( $mycart->id_usuario == $validate[0]->id_user ) $return = 4111;
            else $return = 4100; 
        }
        else $return = 250;

        return response()->json($return);
    }
}

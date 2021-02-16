<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserAddress;
use App\UserCards;
use App\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Cookie;

class UsuarioController extends Controller
{

    public function gettingDTO()
    {
        var_dump($_COOKIE["authlog"]);
    }

    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();

        if($user)
        {
            if(hash::check($request->password,$user->password))
            {
                $user->generateToken();
                setCookie ("authlog",$user->api_token);
                return $user;
            }
            else 
            return response()->json(["error" => "userpsw"]);
        }
        else return response()->json(["error" => "nofound"]);  
    }

    public function register(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email
        ]);

        return response()->json($user);
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
            $response = array("iduser" => $userinfo->id_user,"nombres" => $userinfo->nombres, "apellidos" => $userinfo->apellidos, "ubicacion" => $userinfo->ubicacion, "apartamento" => $userinfo->apartamento, "telefono" => $userinfo->telefono, "celular" => $userinfo->celular,"name" => $user->name,"correo" => $user->email);
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
                    if(hash::check($request->updates["pass"],$user->password))
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


}

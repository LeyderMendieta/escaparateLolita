<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\AmbienteConfiguration;
use App\Configuration;
use App\Mail\CambioEstadoPedido;
use App\UserPedido;
use App\UserPedidoProducto;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(view()->exists($id)){
            return view($id);
        }
        else
        {
            return view('404');
        }

     //   return view($id);
    }

    public function viewToImportProducts()
    {
        if(!isset($_GET["data_response"])){
            return view("admon.import-products");
        }
        else
        {
            return view("admon.import-products",array("data_response" => $_GET["data_response"]));
        }
    }

    public function loadAdmonPage($id = "dashboard")
    {
        if(view()->exists("admon.$id")){
            if(isset($_COOKIE["USADM-OAUTH"]))
            {
                $user = User::where(["api_token" => $_COOKIE["USADM-OAUTH"],"graphDomain" => "Administrador"])->first();
                if($user) return view("admon.$id",["user_name" => $user->name]);
                else return view('500');
            }
            else 
            {
                return Redirect::to('admin/login/oauth');
                
            }
        }
        else
        {
            return Redirect::to('admon');
        }
    }

    public function loginUser($type)
    {
        if(isset($_COOKIE["USADM-OAUTH"]))
        {
            $user = User::where(["api_token" => $_COOKIE["USADM-OAUTH"],"graphDomain" => "Administrador"])->first();
            if($user) return Redirect::to('admon');
            else {
                if($type == "reset") return view('admon.resetPassword');
                else  return view('admon.login');
            }
        }
        else {
            if($type == "reset") return view('admon.resetPassword');
            else  return view('admon.login');
        }
    }

    public function addToModel($model)
    {
        if(view()->exists("admon.form.$model")){
            return view("admon.form.$model",array("token_editing" => ""));
        }
        else
        {
            return view('404');
        }
    }

    public function viewDetailsModel($model,$token)
    {
        if(view()->exists("admon.details.$model")){
            return view("admon.details.$model",array("tokenAccess" => $token));
        }
        else
        {
            return view('404');
        }
    }

    public function editToModel($model,$token)
    {
        if(view()->exists("admon.form.$model")){
            
            return view("admon.form.$model",array("token_editing" => $token));
        }
        else
        {
            return view('404');
        }
    }

    public function loadSettings()
    {
        $settings = AmbienteConfiguration::where("id",">",0)->get();

        return response()->json($settings);
    }

    public function updateSettings(Request $request)
    {
        $model = AmbienteConfiguration::where("id",">",0)->first();
        $model->url_embed_video_home = $request->url_embed_video;
        if($request->imagen_video != "noset") $model->imagen_video_home = $request->imagen_video;
        $model->url_producto_2_home = $request->url_producto_2;
        if($request->imagen_2 != "noset") $model->imagen_2_home = $request->imagen_2;
        $model->url_producto_3_home = $request->url_producto_3;
        if($request->imagen_3 != "noset") $model->imagen_3_home = $request->imagen_3;
        $model->url_producto_5_home = $request->url_producto_5;
        
        
        //----imagenes insta
        $model->url_nueva_colleccion = $request->url_nueva_collection;
        $model->save();

        $models = explode(",",$request->configurations);
        foreach($models as $fila)
        {
            $confVariable = Configuration::where("campo",$fila)->first();
            if($confVariable && $request->{$fila} != "noset")
            {
                $confVariable->valor_caracter = $request->{$fila};
                $confVariable->save();
            }
        }

        return response()->json(array("settings"=> $model));

    }

    public function getUsers()
    {
        $users = DB::table('users')
            ->join('user_infos', 'users.id', '=', 'user_infos.id_user')
            ->select('user_infos.*', 'users.name','users.email' , 'users.graphDomain', 'users.created_at','users.AccessToken')
            ->get();
        return response()->json($users);
    }

    public function getPedidos()
    {
        $userPedidos = UserPedido::where("id",">",0)->orderBy('id', 'desc')->get(); 

        $data = [];
        foreach($userPedidos as $fila)
        {
            $dbFactura = DB::select("SELECT * FROM transferencias WHERE id_pedido='$fila->id'");
            $productos = UserPedidoProducto::where("id_user_pedido",$fila->id)->get();
            if(count($dbFactura) > 0)
            {
                array_push($data,["id" => $fila->id, "id_usuario" => $fila->id_user, "card" => $fila->id_user_card, "fecha" => $fila->created_at->format('d-m-Y h:s a'), "estado" => $fila->estado, "estadoPedido" => $fila->estadoPedido, "total" => $fila->total, "impuesto" => $fila->impuesto, "transferencia" => $dbFactura[0], "productos" => $productos ]);
            }            
        }

        return response()->json($data);
    }

    public function getPedidoDetalle($pedido)
    {
        $userPedido = UserPedido::where("id",$pedido)->orderBy('id', 'desc')->first(); 

        $data = [];

        if(!isset($userPedido->id)) return response()->json(["error" => "nofound"]);

        $dbFactura = DB::select("SELECT * FROM transferencias WHERE id_pedido='$userPedido->id'");
        $userPedidoProductos =  DB::select("SELECT *,t1.id as productoID FROM user_pedido_productos t0 INNER JOIN products t1 ON t0.id_product = t1.id WHERE  t0.id_user_pedido='$userPedido->id'");
        if(count($dbFactura) > 0)
        {
            array_push($data,["id" => $userPedido->id, "id_usuario" => $userPedido->id_user, "card" => $userPedido->id_user_card, "fecha" => $userPedido->created_at->format('d-m-Y h:s a'), "estado" => $userPedido->estado, "domicilio" => $userPedido->costoDomicilio, "estadoPedido" => $userPedido->estadoPedido, "total" => $userPedido->total, "impuesto" => $userPedido->impuesto, "transferencia" => $dbFactura[0], "productos" => $userPedidoProductos ]);
        }    

        return response()->json($data);
    }

    public function actualizarEstadoPedido(Request $request)
    {
        $userPedido = UserPedido::where("id",$request->pedido)->first();
        if(isset($userPedido->estadoPedido))
        {
            $userPedido->estadoPedido = $request->newState;
            $userPedido->save();
            $result = "done";

            $user = User::where("id",$userPedido->id_user)->first();
            if(isset($user->email))
            {
                $transferencia = DB::table("transferencias")->where("id_pedido",$userPedido->id)->first();
                switch($userPedido->estadoPedido)
                {
                    case "En Verificación":
                        $titulo1 = "Su pedido #$userPedido->id en verificación.";
                        $descripcion = "<strong>Su pedido esta en proceso de verificación</strong><br>Estamos verificando el detalle de tu pedido y procesando la información";
                        break;
                    case "Aceptado":
                        $titulo1 = "Su pedido #$userPedido->id ha sido aceptado.";
                        $descripcion = "<strong>Su pedido ha sido aceptado</strong><br>Felicidades, hemos tomado tu pedido de forma exitosa, estamos procesando la información correspondiente para proceder con el envio";
                        break;
                    case "Rechazado":
                        $titulo1 = "Su pedido #$userPedido->id ha sido rechazado.";
                        $descripcion = "<strong>Su pedido ha sido rechazado</strong><br>Le aconsejamos que se comunique con el escaparatedelolita para verificar el concepto de rechazado. [puede ser por pago, no existe dirección, fondos insuficientes, etc]";
                        break;
                    case "En Proceso Envió":
                        $titulo1 = "Su pedido #$userPedido->id esta en proceso de envio.";
                        $descripcion = "<strong>Su pedido esta en proceso de envio</strong><br>Se esta preparando su pedido para ser enviado a su destino.<br/>La dirección a la cual sera enviada es: $transferencia->req_ship_to_address_line1, $transferencia->req_ship_to_address_city $transferencia->req_ship_to_address_country";
                        break;
                    case "Enviado":
                        $titulo1 = "Su pedido #$userPedido->id ha sido enviado.";
                        $descripcion = "<strong>Su pedido ha sido enviado a la siguiente dirección:</strong><br/>$transferencia->req_ship_to_address_line1, $transferencia->req_ship_to_address_city $transferencia->req_ship_to_address_country<br/>
                        <small>Si la dirección presenta inconsistencias le aconsejamos que se comunique con la empresa lo antes posible para corregir la dirección</small>";
                        break;
                    case "Entregado":
                        $titulo1 = "Su pedido #$userPedido->id fue entregado correctamente.";
                        $descripcion = "<strong>Su pedido fue entregado a la siguiente dirección:</strong><br>$transferencia->req_ship_to_address_line1, $transferencia->req_ship_to_address_city $transferencia->req_ship_to_address_country";
                        break;
                    case "No pudo ser Entregado":
                        $titulo1 = "Su pedido #$userPedido->id no pudo ser entregado.";
                        $descripcion = "<strong>Su pedido no fue entregado</strong><br>Le aconsejamos que verifique el sistema de seguimiento y que se comunique con la empresa si el status no se actualiza o presenta inconsistencias";
                        break;
                    case "Devuelto":
                        $titulo1 = "Su pedido #$userPedido->id fue devuelto.";
                        $descripcion = "<strong>Su pedido ha sido devuelto</strong><br>Le aconsejamos que verifique el sistema de seguimiento y que se comunique con la empresa si el status no se actualiza o presenta inconsistencias";
                        break;
                    default:
                        $titulo1 = "Pedido #$userPedido->id.";
                        $descripcion = "<strong>Su pedido</strong><br>Procesando...";
                        break;                    
                }
                Mail::to($user)
                ->cc("soporte@elescaparatedelolita.com")
                ->send(new CambioEstadoPedido(array(
                    "numeroPedido" => $userPedido->id,
                    "nuevoEstadoAsunto" => $userPedido->estadoPedido,
                    "nombres" => $user->name,
                    "titulo1" => $titulo1,
                    "descripcion" => $descripcion,
                    "url_masinfo" => url("/home"),
                )));
                
            }            
        }
        else $result = "failed";
        return response()->json(["result"=> $result]);
    }

    public function getTotalSect1()
    {
        $productTotal = DB::table("products")->count();
        $usersTotal = DB::table("users")->where("graphDomain","!=","Administrador")->count();
        $usersFB = DB::table("users")->where("graphDomain","facebook")->count();
        $usersEscaparate = DB::table("users")->where("graphDomain","Esparate Lolita")->count();
        $usersGoogle = DB::table("users")->where("graphDomain","Google")->count();
        $pedidosTotal = DB::table("user_pedidos")->count();
        $pedidosAceptados = DB::table("user_pedidos")->where("estado","ACCEPT")->count();
        $pedidosRechazados = DB::table("user_pedidos")->where("estado","!=","ACCEPT")->count();
        $pagosTotal = DB::table("user_pedidos")->where("estado","ACCEPT")->sum("total");
        $pedidosGrafica = DB::select("SELECT count(*) as total,estado,MONTH(created_at) as mes,YEAR(created_at) as year FROM `user_pedidos` GROUP BY estado,MONTH(created_at),YEAR(created_at) ORDER BY created_at DESC LIMIT 12");
        $productosMasVistos = DB::select("SELECT count(*) as totalCount,(SELECT COUNT(*) FROM product_views ORDER BY created_at DESC LIMIT 6) as totalAll,t1.* FROM product_views t0 INNER JOIN products t1 ON t0.id_producto=t1.id GROUP BY t0.id_producto ORDER BY totalCount DESC LIMIT 6");
        $productosVistosReciente = DB::select("SELECT t1.* FROM product_views t0 INNER JOIN products t1 ON t0.id_producto=t1.id GROUP BY t0.id_producto ORDER BY t0.created_at DESC LIMIT 6");

        return response()->json(["products" => $productTotal,"users" => $usersTotal,"usersFB" => $usersFB,"usersEscaparate" => $usersEscaparate,"usersGoogle" => $usersGoogle,"pedidos" => $pedidosTotal,"pedidosAceptados" => $pedidosAceptados,"pedidosRechazados" => $pedidosRechazados,"pagos" => $pagosTotal,"pedidosGrafica" => $pedidosGrafica,"productosMasVistos" => $productosMasVistos,"productosVistosReciente" => $productosVistosReciente]);
    }

    public function getCuponsUsers()
    {
        $results = DB::select("SELECT t0.id as idUserCupon,t0.fecha_uso,t0.created_at as registrado,t1.name,t1.email,t2.* FROM user_cupons t0 INNER JOIN users t1 ON t0.id_user=t1.id INNER JOIN cupons t2 ON t0.id_cupon=t2.id");
        return response()->json(["userCupons" => $results]);
    }
}

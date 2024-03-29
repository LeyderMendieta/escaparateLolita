<?php

namespace App\Http\Controllers;

use App\Transferencia;
use App\UserPedido;
use App\UserPedidoProducto;
use App\cart;
use App\cartProduct;
use App\Cupon;
use App\Mail\BienvenidaUsuarioEscaparate;
use App\Mail\CrearUsuarioPorFacturacionAnonima;
use App\Mail\EnviarFacturaRecibo;
use App\User;
use App\UserInfo;
use App\notification;
use App\Product;
use App\UserCupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class PagosController extends Controller
{
    public function billingResponse(Request $requestGenerate)
    {
        $request = (object) $_REQUEST;
        
        if(!isset($request->req_reference_number))
        {
            return response()->json(array("error" => "Fallo en el proceso. Contacta al administrador"));
        }

        $referenceNumber = explode("-",$request->req_reference_number);
        
        $mycart = cart::where("id",str_replace("Cart","",$referenceNumber[0]))->first();
        if(!isset($mycart->id))
        {
            return response()->json(array("error" => "Fallo en la conexión con el carrito"));
        }

        // && $request->decision == "ACCEPT"
        if($mycart->id_cupon != null)
        {
            $cupon = UserCupon::where("id_cupon", $mycart->id_cupon)->first();
            $cupon->fecha_uso = now();
            $cupon->save();

            $mycart->id_cupon = null;
            $mycart->save();
        }

        /** ----------------- Guardar Pedido */
        $user_pedido = new UserPedido();
        $user_pedido->id_user = $mycart->id_usuario;
        $user_pedido->id_cupon = $mycart->id_cupon;
        $user_pedido->id_cart = $mycart->id;
        if(isset($request->req_line_item_count))
        {
            $arreglo = $request->req_line_item_count - 1;
            if(isset($request->{"req_item_".$arreglo."_unit_price"}))
            {
                $user_pedido->costoDomicilio = $request->{"req_item_".$arreglo."_unit_price"}; 
            }
            else $user_pedido->costoDomicilio = 0;
        }
        else $user_pedido->costoDomicilio = 0;
        $user_pedido->impuesto = (isset($request->req_tax_amount)) ? $request->req_tax_amount : 0;
        $user_pedido->total = (isset($request->req_amount)) ? $request->req_amount : 0;
        $user_pedido->estado = $request->decision;
        $user_pedido->save();

        $myproducts_cart = DB::select("SELECT t0.id as cartId,t0.talla_selected,t0.color_selected,t0.cantidad,t1.* FROM cart_products t0 INNER JOIN products t1 ON t0.id_product=t1.id WHERE t0.id_cart=".$mycart->id);

        foreach($myproducts_cart as $producto)
        {
            $impuestox = ($producto->precio_ahora * $producto->cantidad) * 7 / 100;
            $user_pedido_producto = new UserPedidoProducto();
            $user_pedido_producto->id_user_pedido = $user_pedido->id;
            $user_pedido_producto->id_product = $producto->id;
            $user_pedido_producto->talla_selected = $producto->talla_selected;
            $user_pedido_producto->color_selected = $producto->color_selected;
            $user_pedido_producto->cantidad = $producto->cantidad;
            $user_pedido_producto->precio = $producto->precio_ahora;
            $user_pedido_producto->impuesto = $impuestox;
            $user_pedido_producto->total = ($producto->precio_ahora * $producto->cantidad) + $impuestox;
            $user_pedido_producto->save();

            if($request->decision == "ACCEPT")
            {
                $productoTarget = Product::where("id",$producto->id)->first();
                if(isset($productoTarget->stock))
                {
                    $productoTarget->stock = $productoTarget->stock - $producto->cantidad;
                    $productoTarget->save();
                }                
            }
        }

        /**----------END Guardar Pedido */

        $transferencia = new Transferencia();
        $transferencia->id_pedido = $user_pedido->id;
        $transferencia->req_bill_to_surname = $request->req_bill_to_surname;
        $transferencia->req_bill_to_forename = $request->req_bill_to_forename;
        $transferencia->req_bill_to_email = $request->req_bill_to_email;     
        $transferencia->req_bill_to_phone = $request->req_bill_to_phone;
        $transferencia->req_bill_to_address_line1 = $request->req_bill_to_address_line1; 
        $transferencia->req_bill_to_address_country = $request->req_bill_to_address_country;   
        $transferencia->req_bill_to_address_state = $request->req_bill_to_address_state;            
        $transferencia->req_bill_to_address_city = $request->req_bill_to_address_city;        
        $transferencia->req_bill_to_address_postal_code = $request->req_bill_to_address_postal_code;        
        $transferencia->req_ship_to_surname = $request->req_ship_to_surname;        
        $transferencia->req_ship_to_forename = $request->req_ship_to_forename;
        $transferencia->req_ship_to_phone = $request->req_ship_to_phone;
        $transferencia->req_ship_to_address_line1 = $request->req_ship_to_address_line1;  
        $transferencia->req_ship_to_address_country = $request->req_ship_to_address_country;    
        $transferencia->req_ship_to_address_state = $request->req_ship_to_address_state;
        $transferencia->req_ship_to_address_city = $request->req_ship_to_address_city;        
        $transferencia->req_ship_to_address_postal_code = $request->req_ship_to_address_postal_code;
        //------------------
        $transferencia->decision = $request->decision;
        $transferencia->message = $request->message;
        $transferencia->req_transaction_uuid = $request->req_transaction_uuid;
        $transferencia->req_reference_number = $request->req_reference_number;
        $transferencia->transaction_id = (isset($request->transaction_id)) ? $request->transaction_id : 1;
        $transferencia->req_card_expiry_date = (isset($request->req_card_expiry_date)) ? $request->req_card_expiry_date : "null";
        $transferencia->req_card_type =  (isset($request->req_card_type)) ? $request->req_card_type : "null";
        $transferencia->req_card_number = (isset($request->req_card_number)) ? $request->req_card_number : "null";
        $transferencia->req_amount = $request->req_amount;
        $transferencia->signature = $request->signature;
        $transferencia->request_token = $request->request_token;
        $transferencia->card_type_name = $request->card_type_name;
        $transferencia->req_profile_id = $request->req_profile_id;
        $transferencia->req_access_key = $request->req_access_key; 
        //-------------------

        $noticacion = new notification();
        $noticacion->tipo = "Admin";
        $noticacion->texto = "Nuevo Pedido - $request->decision";
        $noticacion->logo = "fe fe-dollar-sign";
        $noticacion->link = url("/admon/viewDetails/pedido/".$user_pedido->id);
        $noticacion->save();

        if($request->decision == "ACCEPT")
        {
            $transferencia->auth_cv_result = (isset($request->auth_cv_result)) ? "M" : "T";  
            $transferencia->auth_trans_ref_no = $request->auth_trans_ref_no;
            $transferencia->auth_amount = $request->auth_amount;
            $transferencia->auth_response = $request->auth_response;
            $transferencia->auth_time = $request->auth_time;
            $transferencia->auth_code = $request->auth_code;            
            $transferencia->req_line_item_count = $request->req_line_item_count;
            $transferencia->score_rcode = $request->score_rcode;
            $transferencia->score_rmsg = $request->score_rmsg;           
            $transferencia->signed_field_names = $request->signed_field_names;
            $transferencia->decision_rmsg = $request->decision_rmsg;
            $transferencia->decision_return_code = $request->decision_return_code;
            $transferencia->bill_trans_ref_no = $request->bill_trans_ref_no;
        }
        else
        {
            $user_pedido->estadoPedido = "Rechazado";
            $user_pedido->save();
            
        }       
        $transferencia->save();

        
    
        $user = User::where("id",$mycart->id_usuario)->get();
        if(count($user) == 0)
        {
            $validateMail = User::where("email",$request->req_bill_to_email)->get();
            $newUserUpdate = UserPedido::where("id",$user_pedido->id)->first();
            $userKey = 0;
            if(count($validateMail) == 0)
            {
                $createdPassword = strtoupper(Str::random(6));
                $newUser = User::create([
                    "name" => $request->req_bill_to_forename." ".$request->req_bill_to_surname,
                    "password" => Hash::make($createdPassword),
                    "email" => $request->req_bill_to_email,
                    "email_verified_at" => now(),
                    "AccessToken" => Str::random(240),
                    "api_token" => Str::random(20),
                    "graphDomain" => "Esparate Lolita - Compra Anonima"
                ]);

                /** Notificacion de Nuevo Usuario */
                $noticacion = new notification();
                $noticacion->tipo = "Admin";
                $noticacion->texto = "Usuario Registrado[$newUser->id] mediante Compra";
                $noticacion->logo = "fe fe-user";
                $noticacion->link = url("/admon/users");
                $noticacion->save();
                /** ----------------------------- */
    
                UserInfo::create([
                    "id_user" => $newUser->id,
                    "nombres" => $request->req_bill_to_forename,
                    "apellidos" => $request->req_bill_to_surname,
                    "ubicacion" => $request->req_bill_to_address_line1,
                    "apartamento" => "1",
                    "telefono" => $request->req_bill_to_phone,
                    "celular" => $request->req_bill_to_phone,
                ]);

                $newUserUpdate->id_user = $newUser->id;
                $newUserUpdate->save();
                //----------Cart
                $mycart->id_usuario = $newUser->id;
                $mycart->save();

                $userKey = $newUser->id;

                Mail::to($newUser)
                ->cc("soporte@elescaparatedelolita.com")
                ->send(new CrearUsuarioPorFacturacionAnonima(array(
                    "nombres" =>  $newUser->name, 
                    "usuario" => $newUser->email, 
                    "clave" => $createdPassword
                )));
            }
            else
            {
                
                $newUserUpdate->id_user = $validateMail[0]->id;
                $newUserUpdate->save();
                //----------Cart
                $mycart->id_usuario = $validateMail[0]->id;
                $mycart->save();

                $userKey = $validateMail[0]->id;
            }
        }
        else $userKey = $user[0]->id;

        if($request->decision == "ACCEPT" && $request->req_transaction_type == "sale,create_payment_token")
        {
            DB::table('user_payment_tokens')->insert([
                'id_user' => $userKey,
                'nombre_card' => $request->req_bill_to_surname." ".$request->req_bill_to_forename,
                'card_type_name' => $request->card_type_name,
                'req_card_number' => $request->req_card_number,
                'req_card_expiry_date' => $request->req_card_expiry_date,
                'payment_token' => $request->payment_token,
            ]);
        }

        /** Send Notification Rules */
        $userPedidoProductos =  DB::select("SELECT *,t1.id as productoID FROM user_pedido_productos t0 INNER JOIN products t1 ON t0.id_product = t1.id WHERE  t0.id_user_pedido='$user_pedido->id'");

        
        $subtotal = 0;
        $impuestos = 0;
        foreach($userPedidoProductos as $fila)
        {
            $subtotal += $fila->precio;
            $impuestos += $fila->impuesto;
        }

        $descuento = ($subtotal + $impuestos + $user_pedido->costoDomicilio) - $user_pedido->total;


        if(count($user) > 0) $userToMail = $user ; 
        else if(count($validateMail) > 0) $userToMail = $validateMail ; 
        else $userToMail = $newUser;
        
        /**Delete Productos del Carrito */
        DB::table('cart_products')->where('id_cart', $mycart->id)->delete();

        if(isset($transferencia->transaction_id))
        {
            $listadoEstados = ["ACCEPT" => "Pago Aceptado","ERROR" => "Pago no pudo ser procesado", "DECLINE" => "Pago Declinado", "REVIEW" => "Pago sujeto a Revisión", "CANCEL" => "Pago Cancelado"];
            Mail::to($userToMail)
            ->cc("soporte@elescaparatedelolita.com")
            ->send(new EnviarFacturaRecibo(array(
                "transferencia" => $transferencia,
                "numero_factura" => $transferencia->transaction_id,
                "fecha_factura" =>  date('d-m-Y h:i:s', strtotime($transferencia->auth_time)),
                "pedido" => $user_pedido,
                "productos" => $userPedidoProductos,
                "subtotal" => $subtotal,
                "descuento" => $descuento,
                "impuestos" => $impuestos,
                "estadoTransferencia" => $listadoEstados[$user_pedido->estado],
                "mailing" => true
            )));
            return redirect("/invoice/$request->transaction_id/$request->req_transaction_uuid");
        }
        else
        {
            return view("store.statusPago",array(
                "status" => $transferencia->decision,
                "mensaje" => $transferencia->message,
                "uuid" => $transferencia->req_transaction_uuid,
                "reference" => $transferencia->req_reference_number,
                "pedido" => $user_pedido,
                "productos" => $userPedidoProductos,
                "subtotal" => $subtotal
            ));
        }
    }

    public function verFactura($id_transaccion,$uuid)
    {
        $db_transaccion = DB::select("SELECT * FROM transferencias WHERE transaction_id='$id_transaccion' AND req_transaction_uuid='$uuid' ");
        if(count($db_transaccion) > 0)
        {
            $userPedido = UserPedido::where("id",$db_transaccion[0]->id_pedido)->first();
            $userPedidoProductos =  DB::select("SELECT *,t1.id as productoID FROM user_pedido_productos t0 INNER JOIN products t1 ON t0.id_product = t1.id WHERE  t0.id_user_pedido='$userPedido->id'");

            $subtotal = 0;
            $impuestos = 0;
            foreach($userPedidoProductos as $fila)
            {
                $subtotal += $fila->precio;
                $impuestos += $fila->impuesto;
            }

            $descuento = ($subtotal + $impuestos + $userPedido->costoDomicilio) - $userPedido->total;

            $listadoEstados = ["ACCEPT" => "Pago Aceptado","ERROR" => "Pago no pudo ser procesado", "DECLINE" => "Pago Declinado", "REVIEW" => "Pago sujeto a Revisión", "CANCEL" => "Pago Cancelado"];
            return view("store.factura",array(
                "transferencia" => $db_transaccion[0],
                "numero_factura" => $id_transaccion,
                "fecha_factura" =>  date('d-m-Y h:i:s', strtotime($db_transaccion[0]->auth_time)),
                "pedido" => $userPedido,
                "productos" => $userPedidoProductos,
                "subtotal" => $subtotal,
                "impuestos" => $impuestos,
                "descuento" => $descuento,
                "mailing" => false,
                "estadoTransferencia" => $listadoEstados[$userPedido->estado],
            ));
        }
        else return redirect("/shop");
    }

    public function getBitacoraPagos()
    {
        $transacciones = DB::select("SELECT * FROM transferencias");
        return response()->json(["transacciones" => $transacciones]);
    }

    public function testing()
    {
        /*
        $productos = DB::table('products')->orderBy('id', 'desc')->limit(4)->get();
        Mail::to("leyder154611@gmail.com")
        ->send(new BienvenidaUsuarioEscaparate(array(
            "ultimosProductos" => $productos
        )));
        */
        return view('store.mailer.AgendaAprobadaParaCliente')
        ->with(["nombres"=>"Leyder Mendieta","tipoAgenda" => "Hecho a la Medida","producto" => "One Size", "fecha" => "2021-03-22", "horario" => "9:30 am a 10:30 am"]);
        //--------------------
    }
}

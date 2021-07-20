<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\AgendaTipo;
use App\Mail\AgendaAprobadaParaCliente;
use App\User;
use Illuminate\Support\Facades\DB;
use App\notification;
use Illuminate\Support\Facades\Mail;

class AgendaController extends Controller
{
    public function getAvailableFor($type,$dia,$mes,$ano)
    {
        if($dia > 31 || $dia <= 0)
        {
            return response()->json([], 200);
        }
        else if($mes > 12 || $mes <= 0)
        {
            return response()->json([], 200);
        }
        else if($ano > 2025 || $ano <= 2019)
        {
            return response()->json([], 200);
        }
        else
        {
            $horarios = DB::select("SELECT ah.* FROM `agenda_horarios` ah LEFT JOIN agendas a ON ah.id=a.id_agenda_horario AND a.fecha='$ano-$mes-$dia' WHERE ah.id_agenda_tipo='$type' AND a.id is null");
            return response()->json($horarios, 200);
        }        
    }

    public function store(Request $request)
    {
        $session = (isset($_COOKIE["authlog"])) ? $_COOKIE["authlog"] : "null";

        if($session == "null") 
            return response()->json(array("error" => "oauthlogged"));

        $user = User::where(['api_token' => $session])->whereNotNull("api_token")->first();
        if($user)
        {
            $agenda = new Agenda();
            $agenda->id_agenda_horario = $request->horario;
            $agenda->fecha = $request->fecha;
            $agenda->estado = 1;
            $agenda->id_user = $user->id;
            $agenda->id_producto = $request->producto;
            $agenda->save();

            $result = DB::select("SELECT t0.tipo FROM agenda_tipos t0 INNER JOIN agenda_horarios t1 ON t0.id=t1.id_agenda_tipo WHERE t1.id='$request->horario'");
            
            $tipo = (isset($result[0]->tipo)) ? $result[0]->tipo : "Desconocido";
            $noticacion = new notification();
            $noticacion->tipo = "Admin";
            $noticacion->texto = "Agenda Solicitada [$agenda->id] - $tipo";
            $noticacion->logo = "fe fe-calendar";
            $noticacion->link = url("/admon/agenda");
            $noticacion->save();
    
            return response()->json($agenda, 201);
        }
        else return response()->json(["error" => "notlogged"]);
    }

    //-----Administrator
    public function verListadoAgendas()
    {
        $agendas = DB::table("agendas")
        ->join("agenda_horarios","agendas.id_agenda_horario","=","agenda_horarios.id")
        ->join("agenda_tipos","agenda_horarios.id_agenda_tipo","=","agenda_tipos.id")
        ->join("users","agendas.id_user","=","users.id")
        ->join("user_infos","users.id","=","user_infos.id_user")
        ->leftJoin("products","agendas.id_producto","=","products.id")
        ->select('agendas.*', 'agenda_horarios.horario', 'agenda_tipos.tipo','users.name as usuario','users.email','products.acceso_url as productoAcceso','products.name as nombreProducto','user_infos.telefono',"user_infos.celular")->get();
        return response()->json($agendas);
    }

    public function liberarAgenda($idAgenda)
    {
        $agendas = DB::table("agendas")->where("id",$idAgenda)->delete();
        return response()->json($agendas);
    }
    public function aceptarAgenda($idAgenda)
    {
        $agenda = DB::update("UPDATE agendas SET estado=2 WHERE id='$idAgenda'");
        if($agenda)
        {
            $agendaRow = DB::table("agendas")
            ->join("agenda_horarios","agendas.id_agenda_horario","=","agenda_horarios.id")
            ->join("agenda_tipos","agenda_horarios.id_agenda_tipo","=","agenda_tipos.id")
            ->join("users","agendas.id_user","=","users.id")
            ->join("user_infos","users.id","=","user_infos.id_user")
            ->leftJoin("products","agendas.id_producto","=","products.id")
            ->select('agendas.*', 'agenda_horarios.horario', 'agenda_tipos.tipo','users.name as usuario','users.email','products.acceso_url as productoAcceso','products.name as nombreProducto','user_infos.telefono',"user_infos.celular")->where("agendas.id",$idAgenda)->first();

            Mail::to($agendaRow->email)
            ->cc("soporte@elescaparatedelolita.com")
            ->send(new AgendaAprobadaParaCliente(array(
                "numeroAgenda" => $agendaRow->id,
                "nombres"=> $agendaRow->usuario,
                "tipoAgenda" => $agendaRow->tipo,
                "producto" => ($agendaRow->nombreProducto != null) ? $agendaRow->nombreProducto : "",
                "fecha" => $agendaRow->fecha,
                "horario" => $agendaRow->horario
            )));
            $response = "success";
        }
        else $response = "failed";
        return response()->json($response);
    }
}

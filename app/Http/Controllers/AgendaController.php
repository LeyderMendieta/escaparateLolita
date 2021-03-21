<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\User;
use Illuminate\Support\Facades\DB;

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
        ->leftJoin("products","agendas.id_producto","=","products.id")
        ->select('agendas.*', 'agenda_horarios.horario', 'agenda_tipos.tipo','users.name as usuario','users.email','products.acceso_url as productoAcceso','products.name as nombreProducto')->get();
        return response()->json($agendas);
    }
}

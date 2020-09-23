<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function getAvailableFor($dia,$mes,$ano)
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
            $horarios = DB::select("SELECT ah.* FROM `agenda_horarios` ah LEFT JOIN agendas a ON ah.id=a.id_agenda_horario AND a.fecha='$ano-$mes-$dia' WHERE ah.id_agenda_tipo=1 AND a.id is null");
            return response()->json($horarios, 200);
        }        
    }

    public function store(Request $request)
    {
        $agenda = new Agenda();
        $agenda->id_agenda_horario = $request->horario;
        $agenda->fecha = $request->fecha;
        $agenda->estado = 1;
        $agenda->save();

        return response()->json($agenda, 201);
    }
}

<?php

use App\AgendaTipo;
use App\AgendaHorario;
use Illuminate\Database\Seeder;

class AgendaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agenda = AgendaTipo::create([
            "tipo" => "Hecho a la medida"
        ]);

        AgendaHorario::create([
            "id_agenda_tipo" => $agenda->id,
            "horario" => "9:30 am a 10:30 am"            
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agenda->id,
            "horario" => "10:30 am a 11:30 am"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agenda->id,
            "horario" => "11:30 am a 12: 30 MD"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agenda->id,
            "horario" => "2:30 pm a 3:30 pm"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agenda->id,
            "horario" => "3:30 pm a 4:30 pm"      
        ]);

        $agendaEntalle = AgendaTipo::create([
            "tipo" => "Entalle Horarios"
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "9:30 am a 10:00 am"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "10:00 am a 10:30 am"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "10:30 am a 11:00 am"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "11:00 am a 11:30 am"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "11:30 am a 12:00 pm"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "2:00 pm a 12:30 pm"      
        ]);

        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "2:30 pm a 3:00 pm"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "3:00 pm a 3:30 pm"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "3:30 pm a 4:00 pm"      
        ]);
        AgendaHorario::create([
            "id_agenda_tipo" => $agendaEntalle->id,
            "horario" => "4:00 pm a 4:30 pm"
        ]);
    }
}

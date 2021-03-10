<?php

use App\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            "campo" => "politica_entrega_completa",
            "valor_numerico" => 1,
            "valor_caracter" => "La politica de entrega es esta"
        ]);
        Configuration::create([
            "campo" => "politica_entrega",
            "valor_numerico" => 1,
            "valor_caracter" => "La entrega es esta"
        ]);
        Configuration::create([
            "campo" => "politica_devoluciones",
            "valor_numerico" => 1,
            "valor_caracter" => "La devolucion es esta"
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImportController extends Controller
{
    public function parseImport(Request $request)
    {

        /*
        $path = $request->file('csv_file')->getRealPath();

        $data = array_map('str_getcsv', file($path));

        if (count($data) > 0) {

            $csv_data = array_slice($data, 0, 8);

            $csv_data_file = Product::create([
                'acceso_url' => Str::random(20).Str::random(20),
                'name' => $csv_data[0],
                'descripcion' => $csv_data[1],
                'precio_antes' => $csv_data[2],
                'precio_ahora' => $csv_data[3],
                'sizes' => '[]',
                'colores'=> '[]',
                'categorias'=> '[]',
                "entallaje" => false,
                "pieza_unica" => false,
                "stock" => $csv_data[4]
            ]);
        } else {
            return redirect()->back();
        }

        return view('admon.import-products', compact( 'csv_data_file'));
        */

    }

}
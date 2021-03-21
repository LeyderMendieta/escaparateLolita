<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImportController extends Controller
{
    public function parseImport(Request $request)
    {
        $path = $request->file('csv_file')->getRealPath();

        $data = array_map('str_getcsv', file($path));
        

        if (count($data) > 0) {

            if ($request->has('header')) {
                $csv_data = array_slice($data, 1, 5);
            }
            else 
            {
                $csv_data = array_slice($data, 0, 5);
            }

            $data_response = [];
            foreach($csv_data as $key => $fila)
            {
                $fila = array_map("utf8_encode", $fila); 
                if(count($fila) > 4)
                {
                    $numero1 = floatval(str_replace(",",".",$fila[2]));
                    $numero2 = floatval(str_replace(",",".",$fila[3]));
                    $numero3 = intval($fila[4]);
                    $response = "Data:  <span class='text-info'>Nombre: <i>".$fila[0]."</i>, Descripcion: <i>".$fila[1].", Precio Antes: <i>".$fila[2].", Precio Ahora: <i>".$fila[3].", Stock: <i>".$fila[4]."</i></span><br/>";
                    if(is_float($numero1) && is_float($numero2) && is_integer($numero3) && $numero2 > 0 && $numero3 > 0)
                    {
                        $existProduct = Product::where("name",$fila[0])->first();
                        if($existProduct) 
                        {
                            $classbg = "danger";
                            $status = "Error";
                            $response .= "Error Duplicado: El producto <u class='text-danger'>".$fila[0]."</u> ya se encuentra en el sistema";
                        }
                        else
                        {
                            $csv_data_file = Product::create([
                                'acceso_url' => Str::random(20).Str::random(20),
                                'name' => $fila[0],
                                'descripcion' => $fila[1],
                                'precio_antes' => $numero1,
                                'precio_ahora' => $numero2,
                                'sizes' => "[]",
                                'colores'=> '[]',
                                'categorias'=> '[]',
                                "entallaje" => false,
                                "pieza_unica" => false,
                                "stock" => $numero3
                            ]);
    
                            $classbg = "success";
                            $status = "success";
                            $response = "Link: ".$csv_data_file->acceso_url."<br/>Nombre: ".$csv_data_file->name."<br/>Precio Antes: ".$csv_data_file->precio_antes."<br/>Precio Ahora: ".$csv_data_file->precio_ahora.$csv_data_file->precio_antes."<br/>Stock: ".$csv_data_file->stock;
                        }                       
                    }
                    else
                    {
                        $classbg = "danger";
                        $status = "Error";
                        $response .= "El Precio Antes, Ahora y el Stock debe ser Numerico, El precio ahora debe ser mayor a cero, al igual que el stock";
                    }
                    
                }
                else
                {
                    $classbg = "danger";
                    $status = "Error";
                    $response = "Son los 5 campos obligatorios";
                }
                
                $data = array("product" => $key+1, "status" => $status, "class" => $classbg, "response" => $response);
                array_push($data_response,$data);
            }
            
        } else {
            return redirect()->back();
        }

        return redirect()->route('importing', ["data_response" => $data_response]);

        //return view('admon.import-products', compact( 'data_response'));
        

    }

}
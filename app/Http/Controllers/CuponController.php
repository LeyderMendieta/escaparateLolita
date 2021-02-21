<?php

namespace App\Http\Controllers;

use App\Category;
use App\Cupon;
use App\Product;
use App\UserCupon;
use Illuminate\Http\Request;

class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cupones = Cupon::where("id",">",0)->get();
        $data = [];
        foreach($cupones as $fila)
        {
            if($fila->tipo == "Cupon de Producto")
                $target = Product::where("id",$fila->id_target)->first();
            else if($fila->tipo == "Cupon de Categoria")
                $target = Category::where("id",$fila->id_target)->first();
            else $target = ["empty" => true];
            array_push($data,["id" => $fila->id,"codigo" => $fila->codigo, "tipo" => $fila->tipo, "target" => $target, "importe" => $fila->importe, "descripcion" => $fila->descripcion, "fecha_caducidad" => $fila->fecha_caducidad, "usado" => $fila->usado]);
        }
        return response()->json(["cupones" => $data], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateExist = Cupon::where("codigo",$request->codigo)->first();
        if($validateExist) {$response = ["error" => "failed used"];}
        else
        {
            $tabla = new Cupon();

            $tabla->codigo = $request->codigo;
            $tabla->tipo = $request->tipo;
            $tabla->id_target = $request->target;
            $tabla->importe = $request->importe;
            $tabla->descripcion = $request->descripcion;
            $tabla->fecha_caducidad = $request->fecha;
            $tabla->save();
    
            if($tabla) $response = ["success" => "saved", "cupon" => $tabla];
            else $response = ["error" => "failed saving"];
        }
        
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cupon = Cupon::where("id",$id)->first();
        return response()->json(["cupon" => $cupon], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tabla = Cupon::where("id",$request->id)->first();
        if($tabla)
        {
            $validarPropietario = UserCupon::where("id_cupon",$tabla->id);
            if($validarPropietario)
            {
                $response = ["error" => "failed used"];
            }
            else
            {                
                $tabla->tipo = $request->tipo;
                if($request->target == "" || $request->target == "null")
                    $tabla->id_target = null;
                else
                    $tabla->id_target = $request->target;
                $tabla->importe = $request->importe;
                $tabla->descripcion = $request->descripcion;
                $tabla->fecha_caducidad = $request->fecha;
                $tabla->save();
        
                if($tabla) $response = ["success" => "saved", "cupon" => $tabla];
                else $response = ["error" => "failed saving"];
            }           
            
        }
        else $response = ["error" => "failed searching"];
        return response()->json($response);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Cupon::where("id",$id)->delete();
        return response()->json(["result" => $result]);
    }
}

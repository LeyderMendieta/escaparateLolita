<?php

namespace App\Http\Controllers;

use App\Contact;
use App\notification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contact::where("id",">",0)->get();
        return response()->json($contactos);
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
        $contacto = new Contact();
        $contacto->nombre = $request->nombres;
        $contacto->correo = $request->email;
        $contacto->asunto = $request->asunto;
        $contacto->mensaje = $request->mensaje;
        $contacto->estado = "Pendiente";
        $contacto->save();

        if($contacto)
        {
            $noticacion = new notification();
            $noticacion->tipo = "Admin";
            $noticacion->texto = "Nuevo Mensaje de Contacto";
            $noticacion->logo = "fe fe-mail";
            $noticacion->link = url("/admon/viewDetails/contactos/".$contacto->id);
            $noticacion->save();
            return response()->json($contacto);
        }
        else return response()->json(["error" => "internalserve"]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = Contact::where("id",$id)->first();
        $contacto->estado = "Visto";
        $contacto->save();
        return response()->json($contacto);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

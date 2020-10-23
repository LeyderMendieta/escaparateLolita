<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(view()->exists($id)){
            return view($id);
        }
        else
        {
            return view('404');
        }

     //   return view($id);
    }

    public function loadAdmonPage($id = "dashboard")
    {
        if(view()->exists("admon.$id")){
            return view("admon.$id");
        }
        else
        {
            return view('404');
        }
    }

    public function addToModel($model)
    {
        if(view()->exists("admon.form.$model")){
            return view("admon.form.$model",array("token_editing" => ""));
        }
        else
        {
            return view('404');
        }
    }

    public function editToModel($model,$token)
    {
        if(view()->exists("admon.form.$model")){
            
            return view("admon.form.$model",array("token_editing" => $token));
        }
        else
        {
            return view('404');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

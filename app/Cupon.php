<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected $fillable = [
        'codigo', 'tipo', 'id_target', 'importe', 'descripcion' , 'fecha_caducidad', 'usado'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'id_user', 'nombres', 'apellidos', "ubicacion", "apartamento", "telefono", "celular"
    ];
}

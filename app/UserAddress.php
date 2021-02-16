<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'id_user', 'tipo', 'referencia', 'direccion', 'apartamento', 'ciudad', 'pais', 'codigo_postal','telefono'
    ];
}

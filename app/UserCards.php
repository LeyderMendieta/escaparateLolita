<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCards extends Model
{
    protected $fillable = [
        'id_user', 'tipo', 'numero', 'ccv', 'pais', 'nombre_tarjeta', 'mes_expiracion', 'ano_expiracion'
    ];
}

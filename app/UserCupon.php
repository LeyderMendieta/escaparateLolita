<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCupon extends Model
{
    protected $fillable = [
        'id_user', 'id_cupon', 'fecha_uso'
    ];
}

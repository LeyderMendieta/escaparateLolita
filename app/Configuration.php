<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'campo', 'valor_numerico', 'valor_caracter'
    ];
}

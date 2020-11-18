<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'acceso_url', 'name', 'descripcion', 'precio_antes', 'precio_ahora' , 'stock', "sizes", "colores","categorias","entallaje","pieza_unica"
    ];
}

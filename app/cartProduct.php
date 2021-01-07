<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartProduct extends Model
{
    protected $fillable = [
        'id_cart', 'id_product', 'id_product_price', 'cantidad',"talla_selected","color_selected"
    ];
}

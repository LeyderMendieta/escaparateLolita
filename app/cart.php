<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class cart extends Model
{
    public function generateToken()
    {
        $this->api_token = Str::random(60);
        $this->save();

        return $this->api_token;
    }

    protected $fillable = [
        'id_usuario', 'api_token', "id_cupon"
    ];
}

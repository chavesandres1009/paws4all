<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    //
    protected $fillable = [
        'raza', 'edad', 'estado',
    ];
}

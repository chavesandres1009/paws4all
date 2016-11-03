<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refugio extends Model
{
    //
    protected $fillable = [
        'nombre', 'direccion', 'descripcion', 'telefono', 'correo', 'logo','paypal'
    ];

    public function user(){
      return $this->hasOne('App\User');
    }

    public function mascotas(){
      return $this->hasMany('App\Mascotas');
    }

    public function noticias_administrativas(){
      return $this->hasMany('App\noticias_administrativas');
    }
}

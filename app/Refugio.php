<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refugio extends Model
{
    //
    protected $fillable = [
        'nombre', 'direccion', 'descripcion', 'telefono', 'correo', 'logo'
    ];

    public function user(){
      return $this->hasOne('App\User');
    }

    public function mascotas(){
      return $this->hasMany('App\Mascotas');
    }

    public function noticias(){
      return $this->hasMany('App\noticias_administrativas');
    }
}

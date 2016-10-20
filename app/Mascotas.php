<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    //
    protected $fillable = [
        'nombre', 'raza', 'edad', 'estado', 'tamano', 'tipo', 'refugio_id'
    ];

    public function refugio(){
      return $this->belongsTo('App/refugios');
    }

    public function usuario_mascotas(){
      return $this->hasMany('App/usuario_mascota');
    }
}

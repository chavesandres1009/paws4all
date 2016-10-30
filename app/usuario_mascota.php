<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_mascota extends Model
{
    //
    protected $fillable = [
      'tipo', 'aporte', 'adopcion', 'user_id', 'mascota_id'
    ];

    public function mascota(){
      return $this->belongsTo('App\Mascotas');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }
}

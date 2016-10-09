<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias_administrativas extends Model
{
    //
    protected $fillable = [
        'titulo', 'descripcion', 'imagen', 'refugio_id'
    ];

    public function refugio(){
      return $this->belongsTo('App/refugios');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    //
    protected $fillable = [
        'titulo', 'descripcion', 'imagen', 'user_id'
    ];

    public function user(){
      return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellidos', 'email', 'password', 'is_admin', 'refugio_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function refugio(){
      return $this->belongsTo('App/refugios');
    }

    public function usuario_mascota(){
      return $this->hasMany('App/usuario_mascota');
    }

    public function noticias(){
        return $this->hasMany('App\noticias');
    }

}

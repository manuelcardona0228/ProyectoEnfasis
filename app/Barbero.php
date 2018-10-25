<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barbero extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'correo', 'calificacion','password','documento','apellidos','fechaNac','calificacion','nameUser','sede_nit','cargo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}

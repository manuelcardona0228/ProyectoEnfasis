<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'documento', 'nombres', 'apellidos','telefono','correo','fechaNac','nameUser','password','cargo_id'
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

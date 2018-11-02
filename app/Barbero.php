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
        'documento','nombres', 'apellidos', 'telefono', 'correo' , 'fechaNac', 'calificacion', 'nameUser', 'password', 'sede_id', 'cargo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function sede()
    {
        return $this->belongsTo('App\Sede');
    }

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }
}

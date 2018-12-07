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
        'documento','nombres', 'apellidos', 'telefono', 'email' , 'fechaNac', 'calificacion', 'nameUser', 'password', 'barberia_id', 'cargo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function barberia()
    {
        return $this->belongsTo('App\Barberia');
    }

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function galeria()
    {
        return $this->belongsTo('App\Galeria');
    }

    public function turnos()
    {
        return $this->hasMany('App\Turno');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function barberia()
    {
        return $this->belongsTo('App\Barberia');
    }

}

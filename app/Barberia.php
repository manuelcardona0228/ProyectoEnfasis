<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    protected $fillable = [
        'nit', 'razonSocial','direccion', 'telefono', 'administrador_id', 'sitioWeb'
    ];


    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function sedes()
    {
        return $this->hasMany('App\Sede');
    }
}

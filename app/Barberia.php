<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    protected $fillable = [
        'nit', 'razonSocial','direccion', 'telefono', 'administrador_documento', 'sitioWeb'
    ];


    public function admin()
    {
        return $this->belongsTo('App\admin');
    }
}

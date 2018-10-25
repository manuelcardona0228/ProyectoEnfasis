<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nit','razonSocial', 'direccion','telefono','barberia_nit','administrador_documento'
    ];
    

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','descripcion','valor'
    ];
    
    public function turno()
    {
        return $this->belongsTo('App\Turno');
    }
}

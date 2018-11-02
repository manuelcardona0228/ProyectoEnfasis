<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'barbero_id'
    ];

    public function barbero()
    {
        return $this->belongsTo('App\Barbero');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha','barbero_id','servicio_id','user_id'
    ];

    public function servicio()
    {
        return $this->belongsTo('App\Servicio');
    }

    public function barbero()
    {
        return $this->belongsTo('App\Barbero');
    }
            
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

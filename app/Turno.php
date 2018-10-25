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
        'fecha','barbero_documento','servicio_id','user_id'
    ];

    

            
            
        

}

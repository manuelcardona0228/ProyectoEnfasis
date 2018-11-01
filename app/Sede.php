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
        'nit','razonSocial', 'direccion','telefono','barberia_id','administrador_id'
    ];
    
    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function barberia()
    {
        return $this->belongsTo('App\Barberia');
    }

}

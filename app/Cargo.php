<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'descripcion'
    ];

    public function admins()
    {
        return $this->hasMany('App\Admin');
    }

    public function barberos()
    {
        return $this->hasMany('App\Barbero');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}

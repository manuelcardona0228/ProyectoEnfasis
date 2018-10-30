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
}

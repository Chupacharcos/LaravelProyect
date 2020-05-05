<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plataformas extends Model
{
    public function juegos()
    {
        return $this->hasMany('App\juegos');
    }
}

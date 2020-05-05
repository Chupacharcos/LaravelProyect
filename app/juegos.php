<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class juegos extends Model
{
    public function plataforma()
    {
        return $this->belongsTo('App\plataformas');
    }

}

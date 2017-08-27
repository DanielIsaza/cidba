<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    /**
     * Obtiene la habilidad a la que pertenece el objetivo
     */
    public function ability()
    {
        return $this->belongsTo('App\Ability');
    }
}

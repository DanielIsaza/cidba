<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
	* obtiene el plan academico del perfil
	**/
    public function academicplan()
    {
        return $this->belongsTo('App\Academicplan');
    }
}

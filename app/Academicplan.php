<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academicplan extends Model
{
	/**
	* obtiene el programa academico del plan
	*/
    public function academicprogram()
    {
        return $this->belongsTo('App\Academicprogram');
    }
    /**
    * obtiene el estado del plan
    */
    public function state()
    {
        return $this->belongsTo('App\State');
    }
    /**
    * obtiene los perfiles del plan academico
    */
    public function profile()
    {
        return $this->hasMany('App\Profile');
    }
    
}

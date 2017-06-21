<?php

namespace App\Http;
use Illuminate\Contracts\View\View;
use Request;
use App\Academicplan;
use App\Academicprogram;
use App\Faculty;


class MakeModelForm
{
	public function compose(View $view)	{
		$makeForm = Request::only('faculty_id','academicprogram_id');
		$facultades = Faculty::pluck('nombre','id','university_id')->toArray();

		
		if($makeForm['faculty_id'] != null){
        	$programas = AcademicProgram::where('faculty_id',$makeForm['faculty_id'])
        					->pluck('nombre','id','faculty_id')
        					->toArray();
    	}

    	$view->with(compact('makeForm','facultades','programas'));
	}

}
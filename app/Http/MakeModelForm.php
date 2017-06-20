<?php

namespace App\Http;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Academicplan;
use App\Academicprogram;
use App\Faculty;


class MakeModelForm
{
	public function compose(View $view)	{
		$makeForm = Request::only('faculty_id','academicprogram_id');
		$facultades = 
	}
}
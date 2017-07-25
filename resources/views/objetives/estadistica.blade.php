@extends("layouts.app");

@section("content")
<div class="container white">
		<h1 align="center">Estadística</h1>
		{!!Form::open(['url'=> '/objetivos','method' =>'POST']) !!}

	<div class="row">
		<div class="col-md-3">{!! Field::select('university_id',$universidades) !!}</div>
		<div class="col-md-3">{!! Field::select('faculty_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicprogram_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicplan_id') !!}</div>
	</div>
	{!! Form::close() !!}
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo objetivo</h1>
		{!!Form::open(['url'=> '/objetivos','method' =>'POST']) !!}

	<div class="row">
		<div class="col-md-3">{!! Field::select('university_id',$universidades) !!}</div>
		<div class="col-md-3">{!! Field::select('faculty_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicprogram_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicplan_id') !!}</div>
	</div>
	 
	<div class="row">
		<div class="col-md-6">{!! Field::select('academicspace_id') !!}</div>
		<div class="col-md-6">{!! Field::select('profile_id') !!}</div>	
	</div>

		{!! Field::select('ability_id') !!}
	 
	<div class="row">
		<div class="col-md-6">
			{{ Form::label('Nombre del objetivo')}}
			{{ Form::text('nombre',null,['class' => 'form-control',
					'placeholder'=>'Nombre']) }}
		</div>
		<div class="col-md-6">
			{{ Form::label('Peso')}}
			{{ Form::text('peso',null,['class' => 'form-control',
					'placeholder'=>'Peso del objetivo sobre la habilidad']) }}
		</div>
	</div>
	<div class="form-group text-	">
		<a href="{{url('/objetivos')}}">Regresar al listado de objetivos</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
	{!! Form::close() !!}
	</div>
@endsection

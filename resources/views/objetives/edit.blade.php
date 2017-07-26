@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo objetivo</h1>
		{!!Form::open(['url'=> '/objetivos/'.$objetivo->id,'method' =>'PUT']) !!}

	<div class="row">
		<div class="col-md-3">{!! Field::select('university_id',$universidades,$idUniversidad) !!}</div>
		<div class="col-md-3">{!! Field::select('faculty_id',$facultades,$idFacultad) !!}</div>
		<div class="col-md-3">{!! Field::select('academicprogram_id',$programas,$idPrograma) !!}</div>
		<div class="col-md-3">{!! Field::select('academicplan_id',$planes,$idPlan) !!}</div>
	</div>
	 
	<div class="row">
		<div class="col-md-6">{!! Field::select('profile_id',$perfiles,$idPerfil) !!}</div>	
		<div class="col-md-6">{!! Field::select('ability_id',$habilidades,$idHabilidad) !!}</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			{{ Form::label('Nombre del objetivo')}}
			{{ Form::text('nombre',$objetivo->nombre,['class' => 'form-control',
					'placeholder'=>'Nombre']) }}
		</div>
		<div class="col-md-6">
			{{ Form::label('Peso')}}
			{{ Form::text('peso',$objetivo->peso,['class' => 'form-control',
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
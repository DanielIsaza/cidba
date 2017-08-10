@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Editar peso espacio - objetivo</h1>
	</div>
	<div class="container">
	{!!Form::open(['url'=> '/asignacionTeorica/'.$objetivoes->id,'method' =>'PUT']) !!}

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
			<div class="col-md-4">{!! Field::select('academicspace_id',$espacios,$objetivoes->academicspace_id) !!}</div>
			<div class="col-md-4">
				{{ Form::label('Peso')}}
				{{ Form::text('peso',$peso,['class' => 'form-control',
					'placeholder'=>'Peso del espacio sobre el objetivo']) }}
			</div>
			<div class="col-md-4">{!! Field::select('objective_id',$objetivos,$objetivoes->objective_id) !!}</div>
		</div>
		
	<div class="form-group text-	">
		<a href="{{url('/asignacionTeorica')}}">Regresar al resumen</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
		{!! Form::close() !!}
	</div>
@endsection
@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Editar habilidad</div>
    <div class="panel-body">
		{!!Form::open(['url'=> '/habilidades/'.$habilidad->id,'method' => 'PUT']) !!}
			<div class="row">
				<div class="col-md-3">{!! Field::select('university_id',$universidades,$idUniversidad) !!}</div>
				<div class="col-md-3">{!! Field::select('faculty_id',$facultades,$idFacultad) !!}</div>
				<div class="col-md-3">{!! Field::select('academicprogram_id',$programas,$idPrograma) !!}</div>
				<div class="col-md-3">{!! Field::select('academicplan_id',$planes,$idPlan) !!}</div>
			</div>

			<div class="row">
				<div class="col-md-6">{!! Field::select('profile_id',$perfiles,$idPerfil) !!}</div>
				<div class="col-md-6">
					{{ Form::label('Tipo de habilidad')}}
					{!! Form::select('typeability_id',$tiposh,$habilidad->typeability_id,['class'=> 'form-control','placeholder'=>'Seleccione una opción','required']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					{{ Form::label('Nombre de la habilidad')}}
					{{ Form::text('nombre',$habilidad->nombre,['class' => 'form-control',
							'placeholder'=>'Nombre de la habilidad ']) }}
				</div>
				<div class="col-md-6">
					{{ Form::label('Peso especifico de la habilidad')}}
					{{ Form::text('peso',$habilidad->peso,['class' => 'form-control',
							'placeholder'=>'Peso específico de la habilidad ']) }}
				</div>
			</div>
			<div class="form-group text-	">
				<a href="{{url('/habilidades')}}">Regresar al listado de habilidades</a>
				<input type="submit" value="Guardar" class="btn btn-success">
			</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
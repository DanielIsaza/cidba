@extends("layouts.app");

@section("content")
{!!Form::open(['url'=> '/planesacademicos/'.$plan->id,'method' => 'PUT']) !!}
	<div class="container white">
		<h1 align="center">Editar plan académico</h1>
			{!! Field::select('university_id',$universidades,1) !!}
			{!! Field::select('faculty_id',$facultades,$idfacultad) !!}
			{!! Field::select('academicprogram_id',$programas,$plan->academicprogram_id) !!}
			{!! Field::select('state_id',$estados,$plan->state_id,['required'=>'required']) !!}
			{{ Form::label('nombre del plan académico')}}
			{{ Form::text('nombre',$plan->nombre,['class' => 'form-control',
				'placeholder'=>'Ingrese un nombre ']) }}
				<br>
			{{ Form::label('Descripción del perfil')}}
				{{ Form::textarea('descripcion',$perfil->descripcion,['class' => 'form-control','placeholder'=>'Descripción del perfil otorgado al estudiante por el plan académico']) }}
		
			<div class="form-group">
				<a href="{{url('/planesacademicos')}}">Regresar al listado de programas</a>
				<input type="submit" value="Guardar" class="btn btn-success">
			</div>	</div>
{!! Form::close() !!}
@endsection
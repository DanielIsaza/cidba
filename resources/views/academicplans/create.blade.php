@extends("layouts.app");

@section("content")
	{!!Form::open(['url'=> '/planesacademicos/','method' => 'POST']) !!}
		<div class="container white">
			<h1 align="center">Crear un plan académico</h1>
				{!! Field::select('university_id',$universidades,null) !!}
				{!! Field::select('faculty_id') !!}
				{!! Field::select('academicprogram_id') !!}
				{!! Field::select('state_id',$estados,null,['required'=>'required']) !!}
				{{ Form::label('Nombre del plan académico')}}
				{{ Form::text('nombre',null,['class' => 'form-control',
					'placeholder'=>'Nombre del plan académico ']) }}
					<br>
				{{ Form::label('Descripción del perfil')}}
				{{ Form::textarea('descripcion',null,['class' => 'form-control','placeholder'=>'Descripción del perfil otorgado al estudiante por el plan académico']) }}
		
			<div class="form-group">
				<a href="{{url('/planesacademicos')}}">Regresar al listado de planes académicos</a>
				<input type="submit" value="Guardar" class="btn btn-success">
			</div>
		</div>	
	{!! Form::close() !!}
@endsection
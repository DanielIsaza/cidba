@extends("layouts.app");

@section("content")
{!!Form::open(['url'=> '/programasacademicos/'.$programa->id,'method' => 'PUT']) !!}
	<div class="container white">
		<h1 align="center">Editar programa académico</h1>
			{!! Field::select('university_id',$universidades,1) !!}
			{!! Field::select('faculty_id',$facultades,$programa->faculty_id) !!}
			{{ Form::text('nombre',$programa->nombre,['class' => 'form-control',
				'placeholder'=>'Ingrese un nombre ']) }}
		
			<div class="form-group">
				<a href="{{url('/programasacademicos')}}">Regresar al listado de programas</a>
				<input type="submit" value="Guardar" class="btn btn-success">
			</div>	</div>
{!! Form::close() !!}
@endsection
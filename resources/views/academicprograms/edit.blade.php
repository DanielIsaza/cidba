@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar programa académico</h1>
		{!! Field::select('university_id',$universidades,null) !!}
				{!! Field::select('faculty_id') !!}
				{{ Form::text('nombre',$programa->nombre,['class' => 'form-control',
					'placeholder'=>'Nombre del programa académico ']) }}
		
			<div class="form-group">
				<a href="{{url('/programasacademicos')}}">Regresar al listado de programas</a>
				<input type="submit" value="Guardar" class="btn btn-success">
			</div>	</div>
@endsection
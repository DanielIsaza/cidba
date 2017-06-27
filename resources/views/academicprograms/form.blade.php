{!!Form::open(['url'=> $url,'method' => $method]) !!}
	<div class="form-group">
		{!! Field::select('university_id',$universidades,null) !!}
	</div>
	<div class="form-group">
		{!! Field::select('faculty_id') !!}
	</div>
	<div class="form-group">
		{{ Form::text('nombre',$programa->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre del tipo de habilidad']) }}
	</div>
	
	<div class="form-group text-	">
		<a href="{{url('/programasacademicos')}}">Regresar al listado de programas</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
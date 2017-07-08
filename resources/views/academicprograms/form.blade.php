{!!Form::model(['url'=> $url,'method' => $method]) !!}

		{!! Field::select('university_id',$universidades,null) !!}
		{!! Field::select('faculty_id') !!}
		{{ Form::text('nombre',$programa->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre del tipo de habilidad']) }}
	
	<div class="form-group text-	">
		<a href="{{url('/programasacademicos')}}">Regresar al listado de programas</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
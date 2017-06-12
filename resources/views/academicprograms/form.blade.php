{!!Form::open(['url'=> $url,'method' => $method]) !!}
	<div class="form-group">
		{{ Form::text('nombre',$programa->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre del tipo de habilidad']) }}
	</div>
	<div class="form-group">
		{!! Form::select('faculty_id',$facultades,null,['class'=> 'form-control','placeholder'=>'Seleccione una opción','required']) !!}
	</div>
	<div class="form-group text-	">
		<a href="{{url('/programasacademicos')}}">Regresar al listado de programas</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
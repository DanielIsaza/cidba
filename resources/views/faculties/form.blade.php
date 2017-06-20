{!!Form::open(['url'=> $url,'method' => $method]) !!}
	<div class="form-group">
		{{ Form::text('nombre',$facultad->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre del tipo de habilidad']) }}
	</div>
	<div class="form-group">
		{!! Form::select('university_id',$universidades,null,['class'=> 'form-control','placeholder'=>'Seleccione una opción','required']) !!}
	</div>
	<div class="form-group text-	">
		<a href="{{url('/facultades')}}">Regresar al listado de facultades</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
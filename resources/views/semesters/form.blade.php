{!!Form::open(['url'=> $url,'method' => $method]) !!}
	<div class="form-group">
		{{ Form::text('nombre',$semestre->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre del semestre']) }}
	</div>
	<div class="form-group text-	">
		<a href="{{url('/semestres')}}">Regresar al listado de semestres</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}s
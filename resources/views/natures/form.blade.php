{!!Form::open(['url'=> $url,'method' => $method]) !!}
	<div class="form-group">
		{{ Form::text('nombre',$nature->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre de la naturaleza']) }}
	</div>
	<div class="form-group text-	">
		<a href="{{url('/naturaleza')}}">Regresar al listado de naturalezas</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
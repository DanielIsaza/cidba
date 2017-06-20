{!!Form::open(['url'=> $url,'method' => $method]) !!}
	<div class="form-group">
		{{ Form::text('nombre',$habilidad->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre de la habilidad']) }}
	</div>
	<div class="form-group">
		{!! Form::select('typeability_id',$tiposh,null,['class'=> 'form-control','placeholder'=>'Seleccione una opción','required']) !!}
	</div>
	<div class="form-group text-	">
		<a href="{{url('/habilidades')}}">Regresar al listado de habilidades</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
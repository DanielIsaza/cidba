{!!Form::open(['url'=> $url,'method' => $method]) !!}
	
	<div class="form-group">
		{{Form::label('Perfil asociado')}}
		{!! Form::select('profile_id',[1,2],null,['class'=> 'form-control','placeholder'=>'Seleccione una opción','required']) !!}
	</div>
	<div class="form-group">
		{{ Form::label('Tipo de habilidad')}}
		{!! Form::select('typeability_id',$tiposh,null,['class'=> 'form-control','placeholder'=>'Seleccione una opción','required']) !!}
	</div>
	<div class="form-group">
		{{ Form::label('Nombre de la habilidad')}}
		{{ Form::text('nombre',$habilidad->nombre,['class' => 'form-control',
		'placeholder'=>'Nombre de la habilidad']) }}
	</div>
	<div>
		{{ Form::label('Peso especifico de la habilidad')}}
		{{ Form::text('peso',$habilidad->peso,['class' => 'form-control','placeholder'=>'Peso de la habilidad sobre el perfil'])}}
	</div>
	<div class="form-group text-	">
		<a href="{{url('/habilidades')}}">Regresar al listado de habilidades</a>
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
{!! Form::close() !!}
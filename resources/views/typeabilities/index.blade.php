@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Tipos de habilidad</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($tiposHabilidades as $tipoHabilidad)
					<tr>
						<td>{{ $tipoHabilidad->id }}</td>
						<td>{{ $tipoHabilidad->nombre }}</td>
						<td> 
							<a href="{{url('/tiposhabilidad/'.$tipoHabilidad->id.'/edit')}}">
							Editar</a>
							@include('typeabilities.delete',['tipoHabilidad'=>$tipoHabilidad])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/tiposhabilidad/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
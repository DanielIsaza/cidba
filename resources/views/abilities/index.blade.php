@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Habilidades</h1>
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
				@foreach($habilidades as $habilidad)
					<tr>
						<td>{{ $habilidad->id }}</td>
						<td>{{ $habilidad->nombre }}</td>
						<td> 
							<a href="{{url('/habilidades/'.$habilidad->id.'/edit')}}">
							Editar</a>
							@include('abilities.delete',['habilidad'=>$habilidad])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/habilidades/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
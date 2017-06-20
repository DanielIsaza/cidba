@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Tipos de metodología</h1>
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
				@foreach($tipometodologias as $tipometodologia)
					<tr>
						<td>{{ $tipometodologia->id }}</td>
						<td>{{ $tipometodologia->nombre }}</td>
						<td> 
							<a href="{{url('/tiposmetodologias/'.$tipometodologia->id.'/edit')}}">
							Editar</a>
							@include('typemethodologies.delete',['tipometodologia'=>$tipometodologia])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/tiposmetodologias/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
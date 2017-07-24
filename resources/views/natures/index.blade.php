@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Naturaleza de los espacios académicos</h1>
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
				@foreach($natures as $nature)
					<tr>
						<td>{{ $nature->id }}</td>
						<td>{{ $nature->nombre }}</td>
						<td> 
							<a href="{{url('/naturaleza/'.$nature->id.'/edit')}}">
							Editar</a>
							@include('natures.delete',['nature'=>$nature])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/naturaleza/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
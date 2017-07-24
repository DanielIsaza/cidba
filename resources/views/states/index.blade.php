@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Estados para planes académicos</h1>
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
				@foreach($estados as $estado)
					<tr>
						<td>{{ $estado->id }}</td>
						<td>{{ $estado->nombre }}</td>
						<td> 
							<a href="{{url('/estados/'.$estado->id.'/edit')}}">
							Editar</a>
							@include('states.delete',['estado'=>$estado])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/estados/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Facultades</h1>
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
				@foreach($facultades as $facultad)
					<tr>
						<td>{{ $facultad->id }}</td>
						<td>{{ $facultad->nombre }}</td>
						<td> 
							<a href="{{url('/facultades/'.$facultad->id.'/edit')}}">
							Editar</a>
							@include('faculties.delete',['facultad'=>$facultad])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/facultades/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Semestres</h1>
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
				@foreach($semestres as $semestre)
					<tr>
						<td>{{ $semestre->id }}</td>
						<td>{{ $semestre->nombre }}</td>
						<td> 
							<a href="{{url('/semestres/'.$semestre->id.'/edit')}}">
							Editar</a>
							@include('semesters.delete',['semestre'=>$semestre])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/semestres/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Programas académicos</h1>
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
				@foreach($programas as $programa)
					<tr>
						<td>{{ $programa->id }}</td>
						<td>{{ $programa->nombre }}</td>
						<td> 
							<a href="{{url('/programasacademicos/'.$programa->id.'/edit')}}">
							Editar</a>
							@include('academicprograms.delete',['programa'=>$programa])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/programasacademicos/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
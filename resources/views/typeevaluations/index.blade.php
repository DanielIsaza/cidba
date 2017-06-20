@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Tipos de evaluación</h1>
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
				@foreach($tipoevaluaciones as $tipoevaluacion)
					<tr>
						<td>{{ $tipoevaluacion->id }}</td>
						<td>{{ $tipoevaluacion->nombre }}</td>
						<td> 
							<a href="{{url('/tiposevaluaciones/'.$tipoevaluacion->id.'/edit')}}">
							Editar</a>
							@include('typeevaluations.delete',['tipoevaluacion'=>$tipoevaluacion])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/tiposevaluaciones/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
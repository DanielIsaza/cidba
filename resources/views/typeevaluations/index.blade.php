@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Tipos de evaluación</div>
    <div class="panel-body">
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
		<div class="floating">
			<a href="{{url('/tiposevaluaciones/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
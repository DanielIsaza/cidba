@extends("layouts.app")

@section("content")
	<div class="panel panel-default">
	<div class="panel-heading">Actividades académicas</div>
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
				@foreach($actividades as $actividad)
					<tr>
						<td>{{ $actividad->id }}</td>
						<td>{{ $actividad->nombre }}</td>
						<td> 
							<a href="{{url('/actividadesacademicas/'.$actividad->id.'/edit')}}">
							Editar</a>
							@include('activityacademics.delete',['actividad'=>$actividad])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/actividadesacademicas/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
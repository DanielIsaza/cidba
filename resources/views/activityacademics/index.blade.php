@extends("layouts.app")

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Actividades académicas</h1>
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
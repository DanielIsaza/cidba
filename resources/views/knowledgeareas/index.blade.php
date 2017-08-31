@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Áreas de conocimiento</div>
    <div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($areas as $area)
					<tr>
						<td>{{ $area->nombre }}</td>
						<td> 
							<a href="{{url('/areasconocimiento/'.$area->id.'/edit')}}">
							Editar</a>
							@include('knowledgeareas.delete',['area'=>$area])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="floating">
			<a href="{{url('/areasconocimiento/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
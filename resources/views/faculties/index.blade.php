@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Facultades</div>
    <div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($facultades as $facultad)
					<tr>
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
		<div class="floating">
			<a href="{{url('/facultades/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
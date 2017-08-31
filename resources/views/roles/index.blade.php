@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Roles</div>
    <div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($roles as $rol)
					<tr>
						<td>{{ $rol->nombre }}</td>
						<td> 
							<a href="{{url('/roles/'.$rol->id.'/edit')}}">
							Editar</a>
							@include('roles.delete',['rol'=>$rol])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="floating">
			<a href="{{url('/roles/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
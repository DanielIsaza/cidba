@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Roles</h1>
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
				@foreach($roles as $rol)
					<tr>
						<td>{{ $rol->id }}</td>
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
	</div>
	<div class="floating">
		<a href="{{url('/roles/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
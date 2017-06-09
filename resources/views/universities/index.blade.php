@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Universidades</h1>
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
				@foreach($universidades as $universidad)
					<tr>
						<td>{{ $universidad->id }}</td>
						<td>{{ $universidad->nombre }}</td>
						<td> 
							<a href="{{url('/universidades/'.$universidad->id.'/edit')}}">
							Editar</a>
							@include('universities.delete',['universidad'=>$universidad])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/universidades/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
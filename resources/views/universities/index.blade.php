@extends("layouts.app")

@section("content")
	<div class="panel panel-default">
		<div class="panel-heading">Universidades</div>
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
			<div class="floating">
				<a href="{{url('/universidades/create')}}" class="btn btn-primary btn-fab">
					<i class="material-icons">add</i>
				</a>
			</div>
		</div>
	</div>
		
@endsection
@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Estados planes académicos</div>
    <div class="panel-body">

		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($estados as $estado)
					<tr>
						<td>{{ $estado->nombre }}</td>
						<td> 
							<a href="{{url('/estados/'.$estado->id.'/edit')}}">
							Editar</a>
							@include('states.delete',['estado'=>$estado])
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="floating">
			<a href="{{url('/estados/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
@extends("layouts.app")

@section("content")
<div class="panel panel-default">
		<div class="panel-heading">Tipos de habilidad</div>
        <div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Nombre</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($tiposHabilidades as $tipoHabilidad)
						<tr>
							<td>{{ $tipoHabilidad->nombre }}</td>
							<td> 
								<a href="{{url('/tiposhabilidad/'.$tipoHabilidad->id.'/edit')}}">
								Editar</a>
								@include('typeabilities.delete',['tipoHabilidad'=>$tipoHabilidad])
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		<div class="floating">
			<a href="{{url('/tiposhabilidad/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
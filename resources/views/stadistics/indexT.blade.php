@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Tabla resumen</div>
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
					@foreach($tiposHabilidades as $tipoHabilidad)
						<tr>
							<td>{{ $tipoHabilidad->id }}</td>
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

    </div>
</div>
@endsection
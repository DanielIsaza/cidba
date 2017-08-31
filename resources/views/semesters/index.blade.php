@extends("layouts.app")

@section("content")
<div class="panel panel-default">
		<div class="panel-heading">Semestres</div>
        <div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Nombre</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@foreach($semestres as $semestre)
						<tr>
							<td>{{ $semestre->nombre }}</td>
							<td> 
								<a href="{{url('/semestres/'.$semestre->id.'/edit')}}">
								Editar</a>
								@include('semesters.delete',['semestre'=>$semestre])
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="floating">
			<a href="{{url('/semestres/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
    </div>
</div>	
@endsection
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
							<div class="row">
								<div class="col-xs-1">
									<a href="{{url('/facultades/'.$facultad->id.'/edit')}}">
										<i class="material-icons">mode_edit</i></a>
									</a>
								</div>
								<div class="col-xs-6">
									@include('faculties.delete',['facultad'=>$facultad])
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div  style="float:top; text-align:right;">
	<a href="{{url('/facultades/create')}}" class="btn btn-primary btn-fab">
	<i class="glyphicon glyphicon-plus"></i>
	</a>
</div>
@endsection

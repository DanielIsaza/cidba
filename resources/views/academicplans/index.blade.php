@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Planes académicos</h1>
	</div>
	<div class="container">
		{{!! Form::open(['class'=>'form']) !!}}
			{{!! Field::select('faculy_id') !!}}	
		{{!! Form::close() !!}}
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/planesacademicos/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Espacios académicos</h1>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-6">{!! Field::select('university_id',$universidades,null) !!}</div>
		<div class="col-md-6">{!! Field::select('faculty_id') !!}</div>
	</div>
	<div class="row">
		<div class="col-md-6">{!! Field::select('academicprogram_id') !!}</div>
		<div class="col-md-6">{!! Field::select('academicplan_id') !!}</div>
	</div>
		{!! Field::select('semester_id',$semestres) !!}

		<table id = "tabla" class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/espaciosacademicos/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
@section("tabla")
	
@endsection
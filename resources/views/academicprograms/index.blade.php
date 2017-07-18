@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Programas académicos</h1>
	</div>
	<div class="container">
		{!! Field::select('university_id',$universidades,null) !!}

		{!! Field::select('faculty_id') !!}

		<table id = "programas" class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/programasacademicos/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
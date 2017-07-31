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
	<script type="text/javascript">
	$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                	rows += '<tr>';
                    rows += '<td>'+row.value+'</td>';
                    rows += '<td>'+row.text+'</td>';
                    rows += '<td>'+"<a href='{{ URL::asset('descargar') }}/"+row.values+"'>Descargar  </a>";
                    rows += "<a href='{{ URL::asset('espaciosacademicos') }}/"+row.value+"/edit'>Editar  </a>";
                    rows += "<form action='{{ URL::asset('espaciosacademicos') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='RiFbRkouPQ51YbNCVmDv3smV5DQfKiG4PMgOpeK9'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'>Eliminar</button>"+"</form>";
                });
                rows += '</tr>';
                rows += '</tbody>';
                $(this).append(rows);
            }
</script>
@endsection
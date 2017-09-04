@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Peso teórico espacio - objetivo</div>
    <div class="panel-body">
		{!! Form::model(['method'=>'POST','class'=>'form']) !!}

			<div class="row">
				<div class="col-md-4">{!! Field::select('university_id',$universidades) !!}</div>
				<div class="col-md-4">{!! Field::select('faculty_id') !!}</div>
				<div class="col-md-4">{!! Field::select('academicprogram_id') !!}</div>
			</div>

			<div class="row">
				<div class="col-md-6">{!! Field::select('academicplan_id') !!}</div>
				<div class="col-md-6">{!! Field::select('ability_id') !!}</div>
			</div>

		{!! Form::close() !!}
		<table id = "tablaT" class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre espacio académico</td>
					<td>Nombre del objetivo</td>
					<td>Peso del objetivo</td>
					<td>Peso del objetivo sobre habilidad</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
<div style="float:top; text-align:right;">
	<a href="{{url('/asignacionTeorica/create')}}" class="btn btn-primary btn-fab">
<i class="glyphicon glyphicon-plus"></i>	</a>
</div>
@endsection
@section('tabla')
	<script type="text/javascript">
		$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                	rows += '<tr>';
                    rows += '<td>'+row.text+'</td>';
                    rows += '<td>'+row.objetivos+'</td>'
                    rows += '<td>'+row.peso+'</td>';
                    rows += '<td>'+row.pesohabilidad+'</td>'
                    rows += '<td> <div class="row"><div class="col-xs-1">';
										rows += "<a href='{{ URL::asset('asignacionTeorica') }}/"+row.value+"/edit'><i class='material-icons'>mode_edit</i> </a>";
										rows += '</div><div class="col-xs-6">';
                    rows += "<form action='{{ URL::asset('asignacionTeorica') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='{{ csrf_token() }}'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'><i class='material-icons'>delete_sweep</i></button>"+"</form>";
                    rows += '</div></div></td></tr>';
                });
                rows += '</tbody>';
                $(this).append(rows);
            }
	</script>
@endsection

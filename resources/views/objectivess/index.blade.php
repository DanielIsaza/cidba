@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Objetivos</div>
    <div class="panel-body">

		{!! Form::model(['method'=>'POST','class'=>'form']) !!}

			<div class="row">
				<div class="col-md-3">{!! Field::select('university_id',$universidades) !!}</div>
				<div class="col-md-3">{!! Field::select('faculty_id') !!}</div>
				<div class="col-md-3">{!! Field::select('academicprogram_id') !!}</div>
				<div class="col-md-3">{!! Field::select('academicplan_id') !!}</div>
			</div>
		 
			<div class="row">
				<div class="col-md-6">{!! Field::select('profile_id') !!}</div>	
				<div class="col-md-6">{!! Field::select('ability_id') !!}</div>
			</div>

			{!! Form::close() !!}
			<table id = "tablaO" class="table table-bordered">
				<thead>
					<tr>
						<td>Id</td>
						<td>Espacio</td>
						<td>Peso sobre objetivos</td>
						<td>Objetivo</td>
						<td>Peso del objetivo sobre habilidad</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		<div class="floating">
			<a href="{{url('/asignacion/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection
@section('tabla')
	<script type="text/javascript">
		$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                	rows += '<tr>';
                    rows += '<td>'+row.value+'</td>';
                    rows += '<td>'+row.text+'</td>';
                    rows += '<td>'+row.peso+'</td>';
                    rows += '<td>'+row.objetivos+'</td>'
                    rows += '<td>'+row.pesohabilidad+'</td>'
                    rows += '<td>'+"<a href='{{ URL::asset('asignacion') }}/"+row.value+"/edit'>Editar </a>";
                    rows += "<form action='{{ URL::asset('asignacion') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='{{ csrf_token() }}'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'>Eliminar</button>"+"</form>";
                    rows += '</tr>';
                });
                rows += '</tbody>';
                $(this).append(rows);
            }
	</script>
@endsection
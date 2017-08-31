@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Planes académicos</div>
    <div class="panel-body">
		{!! Form::model(['method'=>'POST','class'=>'form']) !!}

			{!! Field::select('university_id',$universidades) !!}
			{!! Field::select('faculty_id') !!}
			{!! Field::select('academicprogram_id') !!}

		{!! Form::close() !!}
		
		<table id="tabla" class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Estado</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		<div class="floating">
			<a href="{{url('/planesacademicos/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>
</div>
@endsection

@section("tabla")
<script type="text/javascript">
	$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                	rows += '<tr>';
                    rows += '<td>'+row.text+'</td>';
                    rows += '<td>'+row.estado+'</td>'
                    rows += '<td>'+"<a href='{{ URL::asset('planesacademicos') }}/"+row.value+"/edit'>Editar </a>";
                    rows += "<form action='{{ URL::asset('planesacademicos') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='{{ csrf_token() }}'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'>Eliminar</button>"+"</form>";
                });
                rows += '</tr>';
                rows += '</tbody>';
                $(this).append(rows);
            }
</script>
@endsection
@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Planes académicos</h1>
	</div>
	<div class="container">
		{!! Form::model(['method'=>'POST','class'=>'form']) !!}

			{!! Field::select('university_id',$universidades) !!}
			{!! Field::select('faculty_id') !!}
			{!! Field::select('academicprogram_id') !!}

		{!! Form::close() !!}
		
		<table id="tabla" class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Estado</td>
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

@section("tabla")
<script type="text/javascript">
	$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                	rows += '<tr>';
                    rows += '<td>'+row.value+'</td>';
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
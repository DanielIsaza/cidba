@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Programas académicos</div>
    <div class="panel-body">
		{!! Field::select('university_id',$universidades,null) !!}
		{!! Field::select('faculty_id') !!}

		<table id = "tabla" class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
		<div class="floating">
			<a href="{{url('/programasacademicos/create')}}" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
    </div>
</div>
	
@endsection

@section('tabla')
<script>
$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                    rows += '<td>'+row.text+'</td>';
                    rows += '<td>'+"<a href='{{ URL::asset('programasacademicos') }}/"+row.value+"/edit'>Editar </a>";
                    rows += "<form action='{{ URL::asset('programasacademicos') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='{{ csrf_token() }}'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'>Eliminar</button>"+"</form>";
                });
                rows += '</tbody>';
                $(this).append(rows);
            }
 </script>
@endsection

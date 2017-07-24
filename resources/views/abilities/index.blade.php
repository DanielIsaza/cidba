@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Habilidades</h1>
	</div>
	<div class="container">
	{!! Form::model(['method'=>'POST','class'=>'form']) !!}

			<div class="row">
		<div class="col-md-3">{!! Field::select('university_id',$universidades) !!}</div>
		<div class="col-md-3">{!! Field::select('faculty_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicprogram_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicplan_id') !!}</div>
	</div>
	 {!! Field::select('profile_id') !!}
		{!! Form::close() !!}
		<table id = "tabla" class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Peso</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<div class="floating">
		<a href="{{url('/habilidades/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection
@section('tabla')
	<script type="text/javascript">
		$.fn.populateTable = function (values){
                var rows = '';
                rows += '<tbody>';
                $.each(values, function(key,row){
                    rows += '<td>'+row.value+'</td>';
                    rows += '<td>'+row.text+'</td>';
                    rows += '<td>'+row.peso+'</td>';
                    rows += '<td>'+"<a href='{{ URL::asset('habilidades') }}/"+row.value+"/edit'>Editar </a>";
                    rows += "<form action='{{ URL::asset('habilidades') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='CYLZBWURbR8h86bX6tk24Z7WjExZHfc9rQWiuq3w'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'>Eliminar</button>"+"</form>";
                });
                rows += '</tbody>';
                $(this).append(rows);
            }
	</script>
@endsection
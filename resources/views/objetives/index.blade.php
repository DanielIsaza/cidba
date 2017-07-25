@extends("layouts.app");

@section("content")
	<div class="big-padding text-center blue-grey white-text">
		<h1>Objetivos</h1>
	</div>
	<div class="container">
	{!! Form::model(['method'=>'POST','class'=>'form']) !!}

		<div class="row">
		<div class="col-md-6">{!! Field::select('typeability_id',$tipoHabilidades,null) !!}</div>
		<div class="col-md-6">{!! Field::select('ability_id') !!}</div>
	</div>
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
		<a href="{{url('/objetivos/create')}}" class="btn btn-primary btn-fab">
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
                    rows += '<td>'+"<a href='{{ URL::asset('objetivos') }}/"+row.value+"/edit'>Editar </a>";
                    rows += "<form action='{{ URL::asset('objetivos') }}/"+row.value+"' method='POST' class='inline-block'>"+
                    "<input name='_method' type='hidden' value='DELETE'>"+
                    "<input name='_token' type='hidden' value='RiFbRkouPQ51YbNCVmDv3smV5DQfKiG4PMgOpeK9'>"+
                    "<button type='submit' class='btn btn-link red-text no-padding no-margin no-transform'>Eliminar</button>"+"</form>";
                });
                rows += '</tbody>';
                $(this).append(rows);
            }
	</script>
@endsection
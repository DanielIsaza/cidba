@extends("layouts.app")

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Tabla resumen</div>
    <div class="panel-body">
    	<div class="row">
            <div class="col-md-3">{!! Field::select('university_id',$universidades) !!}</div>
            <div class="col-md-3">{!! Field::select('faculty_id') !!}</div>
            <div class="col-md-3">{!! Field::select('academicprogram_id') !!}</div>
            <div class="col-md-3">{!! Field::select('academicplan_id') !!}</div>
        </div>

  	  	<table class="table table-bordered" id="resumen">
		</table>
    </div>
</div>
@endsection
@section('tabla')
<script type="text/javascript">
	$(document).ready(function(){
		$.fn.populateTable = function (values){
			var rows = '';
            rows += '<thead>';
            rows += '<tr>';
            $.each(values,function(key,row){
            	rows += '<td>'+ row.text + '</td>';
            });
            rows += '</tr>';
            rows += '</thead>';
             $(this).append(rows);
    	}
   
        $('#academicplan_id').change(function(){
        	if($(this).val() > 0){
        		$.getJSON('{{ route('objetivo' )}}/'+1,null,function(values){
            		$('#resumen').populateTable(values);
        		});
        	}
        });
	});
</script>
@endsection
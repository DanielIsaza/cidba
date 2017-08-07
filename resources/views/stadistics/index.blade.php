@extends("layouts.app");

@section("content")
<div class="container white">
		<h1 align="center">Estadística</h1>

	<div class="row">
		<div class="col-md-3">{!! Field::select('university_id',$universidades) !!}</div>
		<div class="col-md-3">{!! Field::select('faculty_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicprogram_id') !!}</div>
		<div class="col-md-3">{!! Field::select('academicplan_id') !!}</div>
	</div>

	<div id="grafica">
		
	</div>
</div>
@endsection

@section("tabla")
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">
 $(function ($) {
    $('#grafica').highcharts({
        title: { text: 'Nuestra primera gráfica' },
        //Se define el valor de los datos que van en el eje X
        xAxis: { categories: ['habilidad 1','habilida 2','habilidad 3'] },
        //Se define el rotulo de los datos que van en el eje y
        yAxis: { title: { text: 'completitud' } },
        legend: { layout: 'vertical',align:'right' },
        //En esta parte se pone el nombre y los valores correspondientes a las categorias definidas
        series: [
            {type:'column', name: 'Real', data: [25,23,20]},
            {type:'column', name: 'Esperado', data: [12,15,30]},
        ] 
    });
 });
</script>
@endsection
@extends("layouts.app");

@section("content")
<div class="panel panel-default">
	<div class="panel-heading">Editar actividad académica</div>
    <div class="panel-body">
		@include('activityacademics.form',['actividad'=>$actividad, 'url' => '/actividadesacademicas/'.$actividad->id,'method' => 'PUT'])
	</div>
</div>
@endsection
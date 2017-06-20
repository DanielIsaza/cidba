@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar actividad académica</h1>
		@include('activityacademics.form',['actividad'=>$actividad, 'url' => '/actividadesacademicas/'.$actividad->id,'method' => 'PUT'])
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nueva actividad académica</h1>
		@include('activityacademics.form',['actividad'=>$actividad,'url' => '/actividadesacademicas','method'=>'POST'])
	</div>
@endsection
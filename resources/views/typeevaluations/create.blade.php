@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo tipo de evaluación</h1>
		@include('typeevaluations.form',['tipoevaluacion'=>$tipoevaluacion,'url' => '/tiposevaluaciones','method'=>'POST'])
	</div>
@endsection
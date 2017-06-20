@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar tipo de evaluación</h1>
		@include('typeevaluations.form',['tipoevaluacion'=>$tipoevaluacion, 'url' => '/tiposevaluaciones/'.$tipoevaluacion->id,'method' => 'PUT'])
	</div>
@endsection
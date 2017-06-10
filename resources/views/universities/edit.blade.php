@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar Universidad</h1>
		@include('universities.form',['universidad'=>$universidad, 'url' => '/universidades/'.$universidad->id,'method' => 'PUT'])
	</div>
@endsection
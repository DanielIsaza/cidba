@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar naturaleza</h1>
		@include('natures.form',['nature'=>$nature, 'url' => '/naturaleza/'.$nature->id,'method' => 'PUT'])
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar Estado</h1>
		@include('states.form',['estado'=>$estado, 'url' => '/estados/'.$estado->id,'method' => 'PUT'])
	</div>
@endsection
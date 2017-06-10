@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar rol</h1>
		@include('roles.form',['rol'=>$rol, 'url' => '/roles/'.$rol->id,'method' => 'PUT'])
	</div>
@endsection
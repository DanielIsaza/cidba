@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo rol</h1>
		@include('roles.form',['rol'=>$rol,'url' => '/roles','method'=>'POST'])
	</div>
@endsection
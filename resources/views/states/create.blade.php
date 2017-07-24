@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo Estado</h1>
		@include('states.form',['estado'=>$estado,'url' => '/estados','method'=>'POST'])
	</div>
@endsection
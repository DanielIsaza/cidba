@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo tipo de habilidad</h1>
		@include('typeabilities.form',['tiposhabilidad'=>$tiposhabilidad,'url' => '/tiposhabilidad','method'=>'POST'])
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo tipo de metodología</h1>
		@include('typemethodologies.form',['tipometodologia'=>$tipometodologia,'url' => '/tiposmetodologias','method'=>'POST'])
	</div>
@endsection
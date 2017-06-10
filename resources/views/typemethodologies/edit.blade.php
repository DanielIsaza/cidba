@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar tipo de metodología</h1>
		@include('typemethodologies.form',['tipometodologia'=>$tipometodologia, 'url' => '/tiposmetodologias/'.$tipometodologia->id,'method' => 'PUT'])
	</div>
@endsection
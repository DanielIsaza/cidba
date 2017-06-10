@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nueva naturaleza</h1>
		@include('natures.form',['nature'=>$nature,'url' => '/naturaleza','method'=>'POST'])
	</div>
@endsection
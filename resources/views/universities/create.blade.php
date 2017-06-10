@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nueva Universidad</h1>
		@include('universities.form',['universidad'=>$universidad,'url' => '/universidades','method'=>'POST'])
	</div>
@endsection
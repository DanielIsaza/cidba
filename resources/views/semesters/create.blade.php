@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo semestre</h1>
		@include('semesters.form',['semestre'=>$semestre,'url' => '/semestres','method'=>'POST'])
	</div>
@endsection
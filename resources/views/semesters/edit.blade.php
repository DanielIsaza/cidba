@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar semestre</h1>
		@include('semesters.form',['semestre'=>$semestre, 'url' => '/semestres/'.$semestre->id,'method' => 'PUT'])
	</div>
@endsection
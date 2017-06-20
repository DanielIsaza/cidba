@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar facultad</h1>
		@include('faculties.form',[['facultad'=>$facultad,'universidades'=>$universidades], 'url' => '/facultades/'.$facultad->id,'method' => 'PUT'])
	</div>
@endsection
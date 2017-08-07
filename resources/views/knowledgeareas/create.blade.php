@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nueva Área de conocimiento</h1>
		@include('knowledgeareas.form',['area'=>$area,'url' => '/areasconocimiento','method'=>'POST'])
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar Área de conocimiento</h1>
		@include('knowledgeareas.form',['area'=>$area, 'url' => '/areasconocimiento/'.$area->id,'method' => 'PUT'])
	</div>
@endsection
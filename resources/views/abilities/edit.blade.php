@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar habilidad</h1>
		@include('abilities.form',[['habilidad'=>$habilidad,'tiposh'=>$tiposh], 'url' => '/habilidades/'.$habilidad->id,'method' => 'PUT'])
	</div>
@endsection
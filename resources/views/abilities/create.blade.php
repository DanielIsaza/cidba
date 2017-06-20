@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nueva Habilidad</h1>
		@include('abilities.form',[['habilidad'=>$habilidad, 'tiposh'=>$tiposh],'url' => '/habilidades','method'=>'POST'])
	</div>
@endsection
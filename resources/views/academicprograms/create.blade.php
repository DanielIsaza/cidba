@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo programa académico</h1>
		@include('academicprograms.form',[['programa'=>$programa, 'universidades'=>$universidades],'url' => '/programasacademicos','method'=>'POST'])
	</div>
@endsection
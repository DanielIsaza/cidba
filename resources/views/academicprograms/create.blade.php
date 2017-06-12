@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nuevo programa académico</h1>
		@include('academicprograms.form',[['programa'=>$programa, 'facultades'=>$facultades],'url' => '/programasacademicos','method'=>'POST'])
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Editar programa académico</h1>
		@include('academicprograms.form',[['programa'=>$programa,'facultades'=>$facultades], 'url' => '/programasacademicos/'.$programa->id,'method' => 'PUT'])
	</div>
@endsection
@extends("layouts.app");

@section("content")
	<div class="container white">
		<h1 align="center">Nueva facultad</h1>
		@include('faculties.form',[['facultad'=>$facultad, 'universidades'=>$universidades],'url' => '/facultades','method'=>'POST'])
	</div>
@endsection
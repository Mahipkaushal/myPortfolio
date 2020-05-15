@extends('layout')

@section('content')
	
	@include('partials.header')

	<div class="wrapper container">

		@include('sections.experiences')
		
		@include('sections.education')

		@include('sections.skills')

		@include('sections.portfolio')

		@include('sections.contact')

	</div>

	@include('partials.footer')

@endsection
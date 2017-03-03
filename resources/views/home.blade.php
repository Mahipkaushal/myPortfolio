@extends('layout')

@section('content')
	
	@include('partials.header')

	<div class="wrapper container">

		@include('partials.experiences')
		
		@include('partials.education')

		@include('partials.skills')

		@include('partials.testimonials')

		@include('partials.portfolio')

		@include('partials.contact')

	</div>

	@include('partials.footer')

@endsection
@extends("master")
@section("center")
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif
		<!-- /SECTION1 -->
		@include("home.section1")
		<!-- /SECTION1 -->
		
		@include("home.section2")
		<!-- SECTION 2-->

		<!-- /SECTION3 -->
		@include("home.section3")
		<!-- /SECTION3 -->

		<!-- SECTION4 -->
		@include("home.section4")		
		<!-- /SECTION4 -->

		<!-- SECTION5 -->
		@include("home.section5")		
		<!-- /SECTION5 -->

		<!-- NEWSLETTER SECTION6 -->
		@include("home.section6")		
		<!-- /NEWSLETTER SECTION6-->

	
@endsection
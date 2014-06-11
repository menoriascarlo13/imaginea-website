@extends('templates.default.default')

	@section('page-title')
		Imaginea Locations
	@stop
	@section('body-tag')
		contactUs cu_locations
	@stop
	@section('banner-right') 
		<h1>Contact</h1>
		<h2>Us</h2>
	@stop
	@section('main-strip-left') 
		<h1>Locations</h1>
		<ul class="ul-address flt-left">
			<li class="first-li">
				US Headquarters
			</li>
			<li>
				1975 W. El Camino Real.
			</li>
			<li>
				Suite # 301
			</li>
			<li>
				Mountain View, CA 94040
			</li>
			<li>
				T: +1-866-660-6533
			</li>
			<li>
				F: +1-408-435-2703
			</li>
			<li class="last-li">
				<a class="orange-link"  href="#">View Map <i></i> </a>
			</li>
		</ul>
		<ul class="ul-address flt-right">
			<li class="first-li">
				India Headquarters
			</li>
			<li>
				#301 Whitehouse, Begumpet
			</li>
			<li>
				Hyderabad 500 016
			</li>
			<li>
				Andhra Pradesh, India
			</li>
			<li>
				T: +91 (40) 2341 1672/73
			</li>
			<li>
				F: +91 (40) 2341 1676
			</li>
			<li class="last-li">
				<a class="orange-link"  href="#">View Map <i></i> </a>
			</li>
		</ul>
	@stop
	@section('main-strip-right')
		@include('contact.sub_nav')
	@stop
	@section('main-content-left')
		<ul class="ul-address flt-right">
			<li class="first-li">
				Chennai Office 
			</li>
			<li>
				II/8, Origin Infosys IT Park,
			</li>
			<li>
				Dr VSI Estate, Chennai 600 041
			</li>
			<li>
				Tamil Nadu, India
			</li>
			<li>
				T: +91 (44) 45920920
			</li>
			<li class="last-li">
				<a class="orange-link"  href="#">View Map <i></i> </a>
			</li>
		</ul>
		<ul class="ul-address flt-left">
			<li class="first-li">
				Hyderabad Office
			</li>
			<li>
				Auriga, Ascendas IT Park
			</li>
			<li>
				Floor VI, Left Wing
			</li>
			<li>
				Building-H, Plot #17
			</li>
			<li>
				Software Units Layout
			</li>
			<li>
				Madhapur, Hyderabad 500 081
			</li>
			<li>
				Andhra Pradesh, India
			</li>
			<li class="last-li">
				<a class="orange-link"  href="#">View Map <i></i> </a>
			</li>
		</ul>
		<ul class="ul-address flt-left">
			<li class="first-li">
				Development Center

			</li>
			<li>
				15th Floor, World Trade Center,

			</li>
			<li>
				Brigade Gateway, #26/1, Dr. Rajkumar Road,

			</li>
			<li>
				Malleswaram West, Bengaluru 560055

			</li>
			<li>
				Karnataka, INDIA

			</li>
			<li>
				Tel: +91 (80) 4906 9999

			</li>
			<li class="last-li">
				<a class="orange-link"  href="#">View Map <i></i> </a>
			</li>
		</ul>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop
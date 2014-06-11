@extends('templates.default.default')

	@section('page-title')
		Imaginea Home
	@stop
	@section('body-tag')
		about about_landing
	@stop
	@section('banner-right') 
		<h1>about</h1>
		<h2>imaginea</h2>
	@stop
	@section('main-strip-left') 
		<h1> Empowering Innovation</h1>
		<p>
			Imaginea helps companies drive innovation through disruptive technologies that capture new opportunities in the marketplace.
		</p>
	@stop
	@section('main-strip-right')
		@include('about.sub_nav')
	@stop
	@section('main-content-left')
		<h5 style="text-align: center;" class="regular-font">How Imaginea Drives the Innovation Process</h5>
		<img style="margin: 0 auto;margin-bottom:40px;margin-top:40px; display: block;" src="/images/banner-infographic/default-big.png">
		<p>
			We can engage at any stage of the process, from consulting and ideation, through product development and implementation.
			Unlike most services organizations, we have a "product DNA" and we've put our money where our mouth is by starting several independent product companies ourselves.
		</p>
		<div class="img-block">
			<div class="flt-left socialtwist-logo">
				<img class="socialtwist-logo-img" style="width:190px;" src="/images/socialtwist-logo.jpg">
				<h4 class="st-text"> SocialTwist, a social marketing platform conceived, developed and brought to market by our Engineering team. </h4>
			</div>
			<div class="qontext-logo flt-right">
				<img class=" qontext-logo-img flt-right"style="width:150px;" src="/images/qontext-logo.png">
				<h4 class="q-text clr flt-right">Acquired by Autodesk in 2011 </h4>
			</div>
		</div>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

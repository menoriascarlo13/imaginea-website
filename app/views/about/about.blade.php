@extends('templates.default.default')

	@section('page-title')
		Imaginea About
	@stop
	@section('body-tag')
		about about_landing
	@stop
	@section('banner-right') 
		<h1>about</h1>
		<h2>imaginea</h2>
	@stop
	@section('main-content-left')
		<h1> Empowering Innovation</h1>
		<h2>
			Imaginea helps companies drive innovation through disruptive technologies that capture new opportunities in the marketplace.
		</h2>
		<h5 style="text-align: center;margin:0px;">How Imaginea Drives the Innovation Process</h5>
		<div class="wheel-bg" >
			<i class="wheel-hover"></i>	
			<div class="stc">
			</div>
			<div class="eps">
			</div>
			<div class="ipm">
			</div>
			<div class="pls">
			</div>
			<div class="tse">
			</div>
			<div class="wheel-center">
				<p class="p-stc">
					Brainstorm strategy that converts a threat into an opportunity
				</p>
				<p class="p-eps" style="margin-top:15px">
					Support your strategy with disruptive technologies
				</p>
				<p class="p-ipm" style="margin-top:15px">
					Develop early prototypes for stakeholder buy-in
				</p>
				<p class="p-pls" style="margin-left:-3px;margin-right:-3px">
					Build and deploy innovative solutions for your customers
				</p>
				<p class="p-tse" style="margin-top:15px">
					Support and/or migrate your legacy solutions
				</p>
			</div>			
		</div>	
		<p>
			We can engage at any stage of the process, from consulting and ideation, through product development and implementation.
			Unlike most services organizations, we have a "product DNA" and we've put our money where our mouth is by starting several independent product companies ourselves.
		</p>
		<div class="img-block">
			<div class="flt-left socialtwist-logo">
				<img class="socialtwist-logo-img" style="width:190px;" src="/images/socialtwist-logo.jpg">
				<p class="st-text"> SocialTwist, a social marketing platform conceived, developed and brought to market by our Engineering team. </p>
			</div>
			<div class="qontext-logo flt-left">
				<img class=" qontext-logo-img "style="width:150px;" src="/images/qontext-logo.png">
				<p class="q-text clr ">An enterprise social collaboration platform, acquired by Autodesk in 2012. </p>
			</div>
		</div>
	@stop
	@section('main-content-right')
		@include('about.sub_nav')
		@include('about.sub_mainstrip_right')
	@stop

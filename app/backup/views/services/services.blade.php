@extends('templates.default.default')

	@section('page-title')
		Imaginea Services
	@stop
	@section('body-tag')
		services services_landing
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<h1>How will you innovate in your business?</h1>
		<p>
			At Imaginea we answer this question everyday for our clients-and then we help them do it. Leveraging the power of today's disrupting technologies - social, mobile, cloud and big data - we help customers innovate to capture opportunity in a changing market.
		</p>
	@stop
	@section('main-strip-right')
		@include('services.sub_nav')
	@stop
	@section('main-content-left')
		<p class="imaginea-diff">
			<label class="bold">An Imaginea Engagement</label>
			<i class="numbered-bullet">1</i>We helped a customer in the financial services industry choose the best technology for their needs and ensure the highest level of security when they migrated their applications to the cloud.
			</br></br>
			<i class="numbered-bullet">2</i>We helped a major insurance broker with a complex big data project, providing them not just ad hoc reporting, but data visualization and trend analysis to help them draw knowledge from numbers.</br></br>
			<i class="numbered-bullet">3</i>We served as the trusted development partner for an on-demand sales solution startup that is now the global leader in their space. Because we provide the high level of quality they require for their product, our team works hand in hand with theirs in a collaborative, results-oriented development process.
		</p>
		<h5 style="text-align: center;" class="regular-font">How Imaginea Drives the Innovation Process</h5>
		<img  style="margin: 0 auto;margin-bottom:40px;margin-top:40px; display: block;" src="images/banner-infographic/default-big.png">
		
		<h5 class="regular-font" style="margin-bottom: 10px;" >
			We can engage at any stage in the process. Whether you're:
		</h5>
		<ul style="margin-bottom: 0px;" class="ul-points" >
			<li>
				looking for advice from an experienced source 
			</li>
		</ul>
			<p style="margin:0px 0px 10px 200px;" >-or-</p>
			<ul style="margin-bottom: 0px;" class="ul-points" >
			<li>
				poised to start new development
			</li>
			</ul>
			<p style="margin:0px 0px 10px 200px;" >-or-</p>
			<ul  class="ul-points" >
			<li>
				ready to hand off a current project while you move on to the next one
			</li>
		</ul>
		<p class="imaginea-diff">
			<label class="bold">Imaginea can help:</label>
			<i class="numbered-bullet">1</i>We bring expertise in critical disruptive software technologies</br></br>
			<i class="numbered-bullet">2</i>We have deep experience across multiple technology platforms and a range of industries</br></br>
			<i class="numbered-bullet">3</i>Our product-centric approach focuses on bringing your solutions to market
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

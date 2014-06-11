@extends('templates.default.default')

	@section('page-title')
		Imaginea Services_ipm
	@stop
	@section('body-tag')
		services services_ipm
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<label>Innovation & Product Management</label>
		<h1>Prototype and test your solution</h1>
		<p>
			Emerging technologies have presented you with a market opportunity, but the gap between idea and product can be unbridgeable. Before you launch into full-scale product development, you need to build momentum for the idea.
		</p>
	@stop
	@section('main-strip-right')
		@include('services.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement</label>
			" First-mover advantage was critical for establishing early market share in a product we recently built for a partnership between two companies with complementary products. They realized that pooling their technologies could open up new markets for them, while countering threats from upstart competitors. "
		</p>
		<p>
			You need proof-points to gain the support of key players like senior management and corporate sponsors. Or even investors and potential customers. Powerpoint has run out of gas; you need a product prototype that the stakeholders can see and believe. Your working proof-of-concept is your ticket to executive support, customer engagement and investment.
		</p>
		<p>
			But, how will you find the right resources to build all this in the midst of managing your business and doing your day job? Expertise in disruptive technologies is scarce and legacy mindsets can inhibit new ideas.
			Imaginea bridges that gap. Our team is ready and well-versed in today's disruptive technologies of social, mobile, cloud and big data. We can build your proof-of-concept to give you the momentum you need to capture that market opportunity before you.
		</p>
		<p class="imaginea-diff">
			<label class="bold">The Imaginea Difference:</label>
			<i class="numbered-bullet">1</i> Social, mobile, cloud and big data are where we focus. Our breadth and depth of knowledge in these areas means we can rapidly develop innovative products-no learning curve, and no business-as-usual assumptions.
		</br></br>
			<i class="numbered-bullet">2</i> We understand the constraints of a Version 1.0 and how to manage cost, while including the right mix of features you need to prove the viability of your concept.
		
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

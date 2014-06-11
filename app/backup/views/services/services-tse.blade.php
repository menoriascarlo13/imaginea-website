@extends('templates.default.default')

	@section('page-title')
		Imaginea Services_tse
	@stop
	@section('body-tag')
		services services_tse
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<label>Technology Services for the Enterprise</label>
		<h1>Support, upgrades and migration</h1>
		<p >
			You're facing the reality of migrating from the old way of doing business to the new. You see opportunity in the new landscape. You've committed some of your best people and you've reallocated some resources.
		</p>
	@stop
	@section('main-strip-right')
		@include('services.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement</label>
			" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus commodo, metus et euismod fermentum, sapien eros facilisis arcu, non tristique dolor nisl non ligula. Suspendisse potenti. Aenean id augue purus. Curabitur ultricies, tortor sit amet aliquam aliquet, lorem erat port"
		</p>
		<p>
			But getting there doesn't happen overnight. Much as you would like to unplug your legacy systems and move forward, you have customers today. You must ensure the continuity of their business and your revenue stream. How can you manage both old and new and provide your organization that seamless move to the future?
		</p>
		<p>
			The TSE Practice at Imaginea can help. Our software maintenance, support, and managed services teams can ensure the smooth and systematic migration of your systems. Our teams work hand-in-hand with yours on development, maintenance and ongoing support to speed transition and manage existing projects, freeing you to innovate.
		</p>
		<p class="imaginea-diff">
			<label class="bold">The Imaginea Difference:</label>
			<i class="numbered-bullet">1</i> We understand the old and the new. We have extensive experience on Java and .Net platforms, tools and frameworks like Eclipse, Spring, Hibernate, Cognos, Business Objects, legacy systems like SAP and Oracle, and cloud technologies.  We manage and migrate existing platforms for clients. We can manage, support, and maintain your systems, as an intermediate project (pending migration) or as an ongoing customer solution.</br></br>
		<i class="numbered-bullet">2</i> We understand the requirements of true enterprise-class systems. From scalability to security, our team takes a proactive approach to ensuring that the systems we support and maintain meet and exceed the SLAs promised to your customers.
		
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

@extends('templates.default.default')

	@section('page-title')
		Imaginea Technology
	@stop
	@section('body-tag')
		technology technology_soc
	@stop
	@section('banner-right') 
		<p>
			Can we help you build a collaboration platform with the power to displace your organization's email?
		</p>
	@stop
	@section('main-strip-left') 
		<h1 class="orange">Social</h1>
		<h1>Social based technology</h1>
		<p>
			When you can visualize innovation but can't spare the resources you need to achieve it, look to a partner with an extensive track record in creating rapid prototypes.
		</p>
	@stop
	@section('main-strip-right')
		@include('technology.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement:</label>	" Social business software, collaboration, interaction models, integrations over the web, and social media are important areas where we continuously work on building expertise and teams. User experience design plays a key role, particularly with increased capabilities of modern browsers. Our teams are constantly experimenting internally on the interplay of such new technologies and user expectations. "
		</p>
		<p>
			When you can visualize innovation but can not spare the resources you need to achieve it, look to a partner with an extensive track record in creating rapid prototypes and proof-of-concept systems to develop your ideal solution, without draining resources from other mission critical projects. Unfettered by legacy systems and business processes, a third party team dedicated to meeting your requirements is the ideal way to demonstrate what is possible quickly and efficiently. Sometimes describing an idea is not enough to get the buy-in you need to move forward. Often, a tangible example of the proposed project a small ,stand-alone application, a 1.0 version is the key to generating momentum for a new project.  Move ahead in the game without jeopardizing your existing programs.
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop
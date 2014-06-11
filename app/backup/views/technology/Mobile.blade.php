@extends('templates.default.default')

	@section('page-title')
		Imaginea Technology
	@stop
	@section('body-tag')
		technology technology_mob
	@stop
	@section('banner-right') 
		<p>
			 We know how to manage the demands of smaller development, for bigger impact.
		</p>
	@stop
	@section('main-strip-left') 
		<h1 class="orange">Mobile</h1>
		<h1>Mobile based technology</h1>
		<p>
			When you can visualize innovation but can't spare the resources you need to achieve it, look to a partner with an extensive track record in creating rapid prototypes.
		</p>
	@stop
	@section('main-strip-right')
		@include('technology.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement:</label>
			" Recognizing the growing importance of mobile devices in recent years, we have been working on specialty mobile platforms, designing for the small screen, harnessing location and device-specific capabilities, and developing mobile apps that complement web apps. "
		</p>
		
		<p >
			When you can visualize innovation but can not spare the resources you need to achieve it, look to a partner with an extensive track record in creating rapid prototypes and proof-of-concept systems to develop your ideal solution, without draining resources from other mission critical projects. Unfettered by legacy systems and business processes, a third party team dedicated to meeting your requirements is the ideal way to demonstrate what is possible quickly and efficiently. Sometimes describing an idea is not enough to get the buy-in you need to move forward. Often, a tangible example of the proposed project a small ,stand-alone application, a 1.0 version is the key to generating momentum for a new project.  Move ahead in the game without jeopardizing your existing programs.
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop
@extends('templates.default.default')

	@section('page-title')
		Imaginea Technology
	@stop
	@section('body-tag')
		technology technology_clo
	@stop
	@section('banner-right') 
		<p>
			What does it take to move your applications to the Cloud?
		</p>
	@stop
	@section('main-strip-left') 
		<h1 class="orange">Cloud</h1>
		<h1>Cloud based technology</h1>
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
			" Since Pramati's inception, our core strength has been in software infrastructure for the Internet economy. This strength stems largely from our experience building app server technologies. Moving to the cloud was a natural extension and we were among the first to join the cloud computing bandwagon. Highly scalable, secure web architectures, and high-availability operations are core areas of specialization for our teams.  "
		</p>
		<p>
			When you can visualize innovation but can not spare the resources you need to achieve it, look to a partner with an extensive track record in creating rapid prototypes and proof-of-concept systems to develop your ideal solution, without draining resources from other mission critical projects. Unfettered by legacy systems and business processes, a third party team dedicated to meeting your requirements is the ideal way to demonstrate what is possible quickly and efficiently. Sometimes describing an idea is not enough to get the buy-in you need to move forward. Often, a tangible example of the proposed project a small ,stand-alone application, a 1.0 version is the key to generating momentum for a new project.  Move ahead in the game without jeopardizing your existing programs.
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

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
	<h1>Company History</h1>
	<h2>
	Let’s start with a hidden truth. Imaginea is a services company that started life as a product company.  Here’s how that played out:
	</h2>
	<p>It all started with our corporate parent<a class="local-link"  target="_blank" href="http://www.pramati.com"> Pramati Technologies </a>, a web pioneer whose Pramati App Server was the first to receive Java standards certification and beat out IBM, Oracle and BEA in the ECPerf race. Soon OEMs started to deploy our App Server into their applications and reached out to us for help in software development. Thus started Pramati Services. </p>
	<p>As new clients started to engage with us in new areas of application development, Pramati saw the opportunity for an independent services company with a unique and unmatched product culture. Imaginea was born in 2009.</p>
	<p>Imaginea today has more than 600 highly skilled engineers and has developed expertise in four critical areas that drive technology transformation: Cloud, Mobile, Social, and Big Data. We are selective – we take on assignments only in these areas so we bring our experience and wisdom to bear at any stage in your product innovation cycle.</p>
	<p><a class="local-link"  target="_blank" href="/contact/form">Contact us</a> to see how we can serve your business.</p>



	@stop
	@section('main-content-right')
		@include('about.sub_nav')
		@include('about.sub_mainstrip_right')
	@stop

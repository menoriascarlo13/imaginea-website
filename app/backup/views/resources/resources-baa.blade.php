@extends('templates.default.default')

	@section('page-title')
		Imaginea Resources
	@stop
	@section('body-tag')
		resources resources_baa
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<h1>Building Android Applications</h1>
		<p>
			Even though Android was created for handsets, there is a great opportunity for developing other innovative devices on the Android platform with significant optimizations and additions required to optimize Android for other connected devices.
		</p>	
	@stop
	@section('main-strip-right')
		@include('resources.sub_nav')
	@stop
	@section('main-content-left')
		<p>
			This white paper discusses several aspects of Android application development.

			The Android software stack is described followed by capabilities of Android Development Tools (ADT). The Android package file (APK) and the four types of application components - Activities, Services, Broadcast Receivers and Content Providers - are also explained. <a  target="_blank" style="float: right; display: block;margin: 20px;border:1px solid #ccc;" href="/images/resources/white-papers/white paper 1.pdf"><img src="/images/resources/white-papers/whitepaper-android.png" /> </a>
			Like any platform, even Android has certain best practices so that you can avoid pitfalls and derive maximum mileage. The white paper discusses 10 such best practices ranging from sharing common functionality to adapting layouts for multiple devices. Android's strengths and weakness are brought to fore with the help of a comparison with other mobile platforms, viz. iOS and BlackBerry.

			The Android deployment was initially focused on mobile handsets, primarily for the consumer market, which to a great extent, is still the main focus. The potential for Android in other markets such as Consumer, Telecom, Automotive, Medical and Home applications, is enormous. The paper also discusses the applications to which Android lends itself and challenges of different devices.

			Download the white paper to understand Android better.
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

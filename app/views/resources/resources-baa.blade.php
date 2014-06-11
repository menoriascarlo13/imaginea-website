@extends('templates.default.default')

	@section('page-title')
		Imaginea Resources
	@stop
	@section('body-tag')
		resources resources_baa
	@stop
	@section('banner-right') 
		<h1>Resources</h1>
	@stop
	@section('main-content-left')
	<h1>Building Android Applications</h1>
		<h2>
			Created for the handset, Android has evolved into a platform that drives innovation across devices of varying form factors. This has created a huge opportunity for creative application development, driving innovation through convenience and universal access.
		</h2>	
		<p>
			This white paper discusses several aspects of Android application development.

			The Android software stack is discussed along with a description of the Android Development Tools (ADT). The Android package file (APK) and the four types of application components - Activities, Services, Broadcast Receivers, and Content Providers - are also explained. <a  target="_blank" style="float: right; display: block;margin: 20px;border:1px solid #ccc;" href="/images/resources/white-papers/white paper 1.pdf"><img src="/images/resources/white-papers/whitepaper-android.png" /> </a>
			As with any development platform, a set of best practices can help you avoid pitfalls and derive maximum advantage.</p>
			<p> We discuss ten such best practices, like sharing common functionality and adapting layouts for multiple devices. You can assess Android's strengths and weaknesses through our comparisons with other mobile platforms, notably iOS and BlackBerry.</p>
			<p>

			The Android platform initially targeted mobile handsets, primarily for the consumer market, and this continues to remain its major focus. However the potential for Android in other markets such as Telecom, Automotive, Medical and Consumer applications is enormous. The paper also discusses the applications best suited for Android and the application development challenges of different devices.</p>
			<p>

			Download our white paper to understand Android better. Do let us know what you think.
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

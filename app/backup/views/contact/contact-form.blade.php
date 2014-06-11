@extends('templates.default.default')

	@section('page-title')
		Imaginea Contact Us
	@stop
	@section('body-tag')
		contactUs cu_contactForm
	@stop
	@section('banner-right') 
		<h1>Contact</h1>
		<h2>Us</h2>
	@stop
	@section('main-strip-left') 
	
	@stop
	@section('main-strip-right')
		
	@stop
	@section('main-content-left')
		<h1>Contact Us!</h1>
		<form>
			<input type="text" class="textbox width-a ip-name" placeholder="Full Name">
			<input type="text" class="textbox width-b ip-title flt-left" placeholder="Title">
			<input type="text" class="textbox width-b ip-company flt-right" placeholder="Company">
			<div class="dropdown width-b flt-right">
				Country
			</div>
			<input type="text" class="textbox width-b ip-telephone flt-left" placeholder="Telephone">
			<input type="text" class="textbox width-a ip-email flt-left" placeholder="email">
			
			<textarea class="textarea width-a ip-address">Comments</textarea>
			<button class="btn-b orange">
				Send
			</button>
		</form>
	@stop
	@section('main-content-right')
		<table class="table-b">
			<tr class="selected">
				<td><a href="cu_contactForm.html"> <img class="arrow-left-temp-img" src="/images/arrow-orange-dark.png"></a></td>
				<td><a href="cu_contactForm.html"> Contact Us </a></td>
			</tr>
			<tr>
				<td><a href="cu_locations.html"> <img class="arrow-left-temp-img" src="/images/arrow-orange-dark.png"></a></td>
				<td><a href="cu_locations.html"> Locations </a></td>
			</tr>
		</table>
		<div style="border-top: 1px solid #666666; margin-top: 20px;padding-top: 50px;" class="recent-tab">
			<h2>RECENT EVENTS</h2>
			<h3>WEBINARS</h3>
			<p>
				Dolar ipsum do hare neasdaysha bshdjs ipsum do hare neasda.
			</p>
			<a class="orange-link"  href="#">Learn More <i></i></a>
		</div>
		<div class="recent-tab">
			<h2>RECENT EVENTS</h2>
			<h3>WEBINARS</h3>
			<p>
				Dolar ipsum do hare neasdaysha bshdjs ipsum do hare neasda.
			</p>
			<a class="orange-link"  href="#">Learn More <i></i> </a>
		</div>
	@stop
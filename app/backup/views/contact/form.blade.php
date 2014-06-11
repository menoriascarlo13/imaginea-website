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
		<form id="contact-form" method="post" > 
			<input type="text" name="fullname" class="textbox width-a ip-name" placeholder="Full Name" required>
			<input type="text" name="title" class="textbox width-b ip-title flt-left" placeholder="Title">
			<input type="text" name="company" class="textbox width-b ip-company flt-right" placeholder="Company">
			<select name="country" class="dropdown width-b flt-right">
				<option value="usa">USA</option>
				<option value="india">India</option>		
			</select>
			<input name="telephone" type="text" class="textbox width-b ip-telephone flt-left" placeholder="Telephone" required>
			<input name="email" type="email" class="textbox width-a ip-email flt-left" placeholder="email" required>
			
			<textarea name="comments" class="textarea width-a ip-address" placeholder="Comments" required ></textarea>
			<button class="btn-b orange send-query">
				Send
			</button>
			<img class="ajax-loader" src="/images/ajax-loader.gif" alt="Loading...">
		</form>
	@stop
	@section('main-content-right')
		@include('contact.sub_nav')
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



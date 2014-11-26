@extends('templates.default.default')

	@section('metas')
		
		<meta name="description" content="If you have any queries about Imaginea's services and solutions, please get in touch with us." />
		<meta name="keywords" content=" Imaginea, contact Imaginea, Imaginea Technologies" />
	@stop

	@section('page-title')
		Contact Imaginea 
	@stop
	@section('body-tag')
		contactUs cu_contactForm
	@stop
	@section('banner-right') 
		<h1>Contact Us</h1>
	@stop
	@section('main-content-left')
		<h1>Contact Us!</h1>
		<form id="contact-form" method="post" > 
			<input type="text" name="fullname" class="textbox width-a ip-name" placeholder="Full Name" required>
			<input type="text" name="title" class="textbox width-b ip-title flt-left" placeholder="Title">
			<input type="text" name="company" class="textbox width-b ip-company flt-right" placeholder="Company">
			
			<input name="telephone" type="text" class="textbox width-b ip-telephone flt-left" placeholder="Telephone" required>
			<select name="country" class="dropdown width-b flt-right">
				<option value="usa">USA</option>
				<option value="india">India</option>		
			</select>
			<input name="email" type="email" class="textbox width-a ip-email flt-left" placeholder="Email" required>
			
			<textarea name="comments" class="textarea width-a ip-address" placeholder="Comments" required></textarea>
			<button class="btn-b orange send-query">
				Send
			</button>
			<img class="ajax-loader" src="/images/ajax-loader.gif" alt="Loading...">
		</form>
	@stop
	@section('main-content-right')
		@include('contact.sub_nav')
	@stop



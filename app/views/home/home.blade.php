@extends('templates.default.default')

	@section('page-title')
		Imaginea Home
	@stop
	@section('body-tag')
		landing
	@stop
	@section('banner-right') 
		<h2>A Services Company with a Product DNA</h2>
		<a href="/services">
		<button class="btn-a orange" >
			Learn More <img class="arrow-right-a-img" src="images/arrow-right-a.png">
		</button> </a>
	@stop
	@section('main-strip-left') 
		
	@stop
	@section('main-strip-right')
		
	@stop
	@section('main-content-left')
		<div id='carousel_container'>
					<div id='carousel_inner'>
						<div class="filter"></div>
						<ul id="carousel_ul" style="left: 0px">
							<li  class="left-li q-stc">
								<a class="header" href="/services/Strategy-and-Technology-Consulting">Strategy & Technology Consulting</a>
								<a href="/services/Strategy-and-Technology-Consulting"><img src="images/stock1.png"></a>
								<p>
									Wondering how to turn the threats facing your business into new opportunities?
								</p>
								<a class="orange-link" href="/services/Strategy-and-Technology-Consulting">Imaginea can help<i></i></a>
								
							</li>
							<li class="border-left q-eps">
								<a class="header" href="/services/Emerging-Platform-Solutions">Emerging Platform Solutions</a>
								<a href="/services/Emerging-Platform-Solutions"><img src="images/stock2.png"></a>
								<p>
									New cloud/social/mobile/big data platforms are appearing every day. Which ones will work for me?
								</p>
								<a class="orange-link" href="/services/Emerging-Platform-Solutions">Imaginea can help<i></i></a>
							</li>
							<li class="q-ipm">
								<a class="header" href="/services/Innovation-and-Product-Management">Innovation & Product Management</a>
								<a href="/services/Innovation-and-Product-Management"><img src="images/stock3.png"></a>
								<p>
									Need a proof-of-concept to get support for your new product plan?
								</p>
								<a class="orange-link" href="/services/Innovation-and-Product-Management">Imaginea can help<i></i></a>
							</li>
							<li class="q-pls">
								<a class="header" href="/services/Product-Lifecycle-Services">Product Lifecycle Services</a>
								<a href="/services/Product-Lifecycle-Services"><img src="images/stock4.png"></a>
								<p>
									We're in the midst of a major project and we need more resources to get it done in time.
								</p>
								
								<a class="orange-link" href="/services/Product-Lifecycle-Services">Imaginea can help<i></i></a>
							</li>
							<li class="q-tse">
								<a class="header" href="/services/Technology-Services-for-the-Enterprise">Technology Services for the Enterprise</a>
								<a href="/services/Technology-Services-for-the-Enterprise"><img src="images/stock5.png"></a>
								<p>
									We want to speed our migration to new platforms, and use our best people to do it. 
								</p>
								<a class="orange-link" href="/services/Technology-Services-for-the-Enterprise">Imaginea can help<i></i></a>
							</li>
						</ul>
					</div>
					<div id='right_scroll'><img src='/images/nav-right.png' />
					</div>
				</div>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

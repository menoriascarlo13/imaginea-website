@extends('templates.default.default')

	@section('page-title')
		Imaginea Home
	@stop
	@section('body-tag')
		landing
	@stop
	@section('banner-right') 
		<h1>empowering innovation</h1>
		<h2>at imaginea</h2>
		<a href="services.html">
		<button class="btn-a orange" onclick="services.html">
			Learn More <img class="arrow-right-a-img" src="images/arrow-right-a.png">
		</button> </a>
	@stop
	@section('main-strip-left') 
		<div id='carousel_container'>
					<div id='left_scroll'><img src='/images/nav-left.png'/>
					</div>
					<div id='carousel_inner'>
						<div class="filter"></div>
						<ul id="carousel_ul" class="carousel-a" style="left: 0px">
							<li  class="left-li q-stc">
								<a href="services_stc.html">Strategy & Technology Consulting</a>
								<p>
									There's a start-up nibbling at our business and we want to head them off before they take a big bite, but we're not sure what our strategy should be and what technology we should bring to bear. Can you help us plan our counter-attack?
								</p>
							</li>
							<li class="border-left q-eps">
								<a href="services_eps.html">Emerging Platform Solutions</a>
								<p>
									We've decided to migrate our solutions to the cloud, but we need to evaluate and select the right technologies and understand the ramifications. How can you help?
								</p>
							</li>
							<li class="q-ipm">
								<a href="services_ipm.html">Innovation & Product Manegement</a>
								<p>
									We have envisioned a complete mobile extension to our flagship product, but we need to prove it can be done before I can attract investment and buy-in for a major development program. Can you put together something fast and functional?
								</p>
							</li>
							<li class="q-pls">
								<a href="services_pls.html">Product Lifecycle Services</a>
								<p>
									We're in the midst of a major project and we need more resources to get it done in time. We don't want to hand off the whole project, and we must have high quality. Can your team integrate with ours?
								</p>
							</li>
							<li class="q-tse">
								<a href="services_tse.html">Technology Services for Enterprise</a>
								<p>
									We want to speed our migration to new platforms, and use our best people to do it. Can I offload some IT functions to you so I can free them up?
								</p>
							</li>
						</ul>
					</div>
					<div id='right_scroll'><img src='/images/nav-right.png' />
					</div>
				</div>
	@stop
	@section('main-strip-right')
		
	@stop
	@section('main-content-left')
		
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

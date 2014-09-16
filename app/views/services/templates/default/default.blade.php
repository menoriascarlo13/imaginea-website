<!DOCTYPE HTML>
<html>
	<head>
		 <title>@yield('page-title')</title>
		<link href="/css/style.css" rel="stylesheet" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="/js/scroll.js"  type="text/javascript" ></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<!--		<script type="text/javascript" src="http://fast.fonts.com/jsapi/c3be5c79-dc29-43b1-a050-6b8892e096ed.js"></script> -->
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/1f3228cb-2b5e-4668-9137-c63df34d92f1.js"></script>
	</head>
	<body class="@yield('body-tag')">
	
	
	<section class="top-gap">
		<div class="wrapper-left"></div>
	</section>
	<section class="top-header">
			<div class="wrapper">
			<a href="/"> <img class="logo-img flt-left" src="/images/logo.png"></a>
			<ul class="main-nav flt-right">
				<li class="mn-about">
					<a href="/about">About</a>
				</li>
				<li class="mn-services">
					<a href="/services">Services</a>
				</li>
				<li class="mn-resources">
					<a href="/resources">Resources </a>
				</li>
				<li class="mn-technology">
					<a href="/technology">Technology </a>
				</li>
				<li class="mn-contact">
					<a href="/contact">Contact us </a>
				</li>
			</ul>
			<ul class="sub-nav sub-nav-technology">
				<li class="sn-cloud first-li">
					<a href="/technology/Cloud">Cloud</a>
				</li>
				<li class="sn-mobile">
					<a href="/technology/Mobile">Mobile</a>
				</li>
				<li class="sn-social last-li">
					<a href="/technology/Social">Social</a>
				</li>
				<li class="sn-bigdata">
					<a href="/technology/Big-Data">Big Data</a>
				</li>
				<li class="sn-API">
					<a href="/technology/API">Big Data</a>
				</li>

			</ul>
			<ul class="sub-nav sub-nav-about">
				<li class="sn-team first-li">
					<a href="/about">About</a>
				</li>
				<li class="sn-team first-li">
					<a href="/about/team">Team</a>
				</li>
				<li class="sn-careers">
					<a href="/about/careers">Careers</a>
				</li>
				<li class="sn-locations">
					<a href="/contact/locations">Locations</a>
				</li>
				<li class="sn-contactForm first-li">
					<a href="/contact/form">Contact Us</a>
				</li>
				<li class="sn-contactForm first-li">
					<a href="/about/history">History</a>
				</li>
			</ul>
			<ul class="sub-nav sub-nav-services">
				<li class="sn-stc first-li">
					<a href="/services/Strategy-and-Technology-Consulting"> <label>S</label>trategy &</br> <label>T</label>echnology</br> <label>C</label>onsulting</a>
				</li>
				<li class="sn-eps">
					<a href="/services/Emerging-Platform-Solutions"> <label>E</label>merging</br> <label>P</label>latform</br> <label>S</label>olutions</a>
				</li>
				<li class="sn-ipm">
					<a href="/services/Innovation-and-Product-Management"> <label>I</label>nnovation &</br> <label>P</label>roduct</br> <label>M</label>anagement </a>
				</li>
				<li class="sn-pls">
					<a href="/services/Product-Lifecycle-Services"> <label>P</label>roduct</br> <label>L</label>ifecycle</br> <label>S</label>ervices</a>
				</li>
				<li class="sn-tse">
					<a href="/services/Technology-Services-for-the-Enterprise"> <label>T</label>echnology</br> <label>S</label>ervices for </br>the <label>E</label>nterprise </a>
				</li>
			</ul>
			</div>
		</section>
		
		<section class="top-banner">
	<div class="wrapper-left">
		<div class="banner-img-bg"></div>
	</div>
	<div class="wrapper-right">
		@yield('banner-right')
		
	</div>
</section>
	
	<div class="divider-gap">
		<div class="wrapper-left"></div>
	</div>
	<section class="main-strip">
		<div class="wrapper-left">
			<div class="container">
				@yield('main-strip-left')
			</div>
		</div>
		<div class="wrapper-right">
			@yield('main-strip-right')
		</div>
	</section>
	<div class="divider-gap">
		<div class="wrapper-left"></div>
	</div>
	<section class="main-content">
		<div class="wrapper-left">
			<div class="container">
				@yield('main-content-left')
				<a href="/contact/form">
			<button class="btn-b orange general-contact"> Contact Us</button>
		</a>
			</div>
			
		</div>
		<div class="wrapper-right">
			@yield('main-content-right')
		</div>
		
	</section>
	<div class="divider-gap">
		<div class="wrapper-left"></div>
	</div>
	<section class="footer">
			<div class="wrapper-left">
				<div class="footer-wrap-a">
					<div class="footer-row-a">
						<ul>
							<li class="first-li" >
								About
							</li>
							<li>
								<a href="/about/team">Team</a>
							</li>
							<li>
								<a href="/about/careers">Careers</a>
							</li>
							<li>
								<a href="/about/history">History</a>
							</li>
							<li>
								<a href="/contact/locations">Locations</a>
							</li>

						</ul>
					</div>
					<div class="footer-row-b">
						<ul>
							<li class="first-li" >
								Services
							</li>
							<li>
								<a href="/services/Strategy-and-Technology-Consulting">Strategy & Technology Solutions</a>
							</li>
							<li>
								<a href="/services/Emerging-Platform-Solutions">Emerging Platform Solutions</a>
							</li>
							<li>
								<a href="/services/Innovation-and-Product-Management">Innovation & Product Management</a>
							</li>
							<li>
								<a href="/services/Product-Lifecycle-Services">Product Lifecycle Services</a>
							</li>
							
							<li>
								<a href="/services/Technology-Services-for-the-Enterprise">Technology Services for Enterprise</a>
							</li>
						</ul>
					</div>
					
					<div class="footer-row-d">
						<ul>
							<li class="first-li" >
								Contact Us
							</li>
							<li>
								1975 W. El Camino Real, Suite 301,
							</li>
							<li>
								Mountain View, CA 94040
							</li>
							<li>
								T: +1-866-660-6533
							</li>
							<li>
								info@imaginea.com
							</li>
						</ul>
					</div>
					<div class="footer-row-c">
						<ul>
							<li class="first-li" >
								Technology
							</li>
							<li>
								<a href="/technology/Cloud">Cloud</a>
							</li>
							<li>
								<a href="/technology/Mobile">Mobile</a>
							</li>
							<li>
								<a href="/technology/Social">Social</a>
							</li>
							<li>
								<a href="/technology/Big-Data">Big Data</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="wrapper-right">
				<p>
					Copyright &#169; 2013 Imaginea. All Rights Reserved. Imaginea is a registered trademark.
				</p>
				<ul>
					<li>
						Privacy Policy
					</li>
					<li class="empty-li" >
						|
					</li>
					<li>
						Terms of Service
					</li>
				</ul>
			</div>
		</section>
		<section class="footer-extension">
			<div class="wrapper-left">
				<div class="fw-a"></div>
			</div>
			<div class="wrapper-right">
				
			</div>
		</section>
		<script type="text/javascript">

			$(document).ready(function(){

				/*
				 *  For highlighting the active sub navigation menu in the technology page. 
				 */
				$('.tech-list li a').each(function(index) {
			        if(this.href.trim() == window.location)
			        {
			        	$(this).parent().parent().children('li').removeClass("selected");
			            $(this).parent().addClass("selected");
			        }
			    });

				/*
				 * For highlighting the active main menu
				 */
			    $('.main-nav li a').each(function(index) {
			        $('.mn-'+window.location.pathname.split('/')[1]).addClass('selected');
			    });

				/*
				 *  For highlighting the active sub navigation menu in all page except technology page. 
				 */
			    $('.sub-nav a').each(function(index) {
		          if(this.href.trim() == window.location)
		          {
		              $(this).parent().parent().parent().children().removeClass('selected');
		             $(this).parent().parent().addClass('selected');
		          }
			    });

			    /*
			     *  For handling the ContactUs submission
			     */
			    $('#contact-form').submit(function(){

			    	var data = $(this).serialize();

			    	$('button.send-query').text('Sending...');
			    	$('.ajax-loader').show();
			    	$(this).children().attr('disabled', true);
			    	
			    	$.post('/send_mail', data,  function(result) {
			    		result = JSON.parse(result);
			 		   $('#contact-form').hide();	
					   $('.main-content h1').text(result.message);
					});

					return false;
				});
			});
		</script>
	</body>
</html>

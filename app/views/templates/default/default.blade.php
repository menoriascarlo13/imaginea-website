
@include('templates.default.header')
	<section class="top-banner">
		<div class="wrapper-left">
			<div class="banner-img-bg"></div>
		</div>
		<div class="wrapper-right">
			@yield('banner-right')
		</div>
	</section>
	<div class="divider-gap"><div class="wrapper-left"></div></div>
	<section class="main-content">
		<article class="wrapper-left">
			<div class="container">
				@yield('main-content-left')
			</div>
		</article>
		<aside class="wrapper-right">
			@yield('main-content-right')
			<a href="/contact/form">
			<button class="btn-b orange general-contact flt-left"> Contact Us</button></a>
		</aside>
	</section>
@include('templates.default.footer')	

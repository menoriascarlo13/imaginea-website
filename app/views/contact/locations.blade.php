@extends('templates.default.default')

	@section('page-title')
		Imaginea Locations
	@stop
	@section('body-tag')
		contactUs cu_locations
	@stop
	@section('banner-right') 
		<h1>Contact Us</h1>
	@stop
	@section('main-strip-left') 
		

<!--
		<ul class="ul-address flt-right">
			<li class="first-li">
				<span class="loc-heading">Hyderabad<br/></span>
				Midtown Plaza<br/>
				Road No. 1, Banjara Hills<br/>
				Hyderabad, AP 500034 <br/>
				T: +91 (40) 3355 2000
			</li>
			<li class="last-li">
				<a class="orange-link"  target="_blank"  href="https://maps.google.co.in/maps?q=Mid+Town,+Road+No+1,+Dwarakapuri,+Punjagutta,+Hyderabad,+Andhra+Pradesh+500082&hl=en&sll=17.422941,78.44955&sspn=0.002249,0.004128&gl=in&geocode=FbLbCQEdMwqtBA&hnear=Mid+Town,+Road+No+1,+Punjagutta,+Hyderabad,+Andhra+Pradesh&t=m&hq=Mid+Town,+Road+No+1,+Dwarakapuri,+Punjagutta,+Hyderabad,+Andhra+Pradesh+500082&z=14&iwloc=A">View Map <i></i> </a>
			</li>
		</ul>
-->
	@stop
	@section('main-strip-right')
		@include('contact.sub_nav')
	@stop
	@section('main-content-left')
	<h1>Locations</h1>
		<ul class="ul-address flt-left">
			<li class="first-li">
				<span class="loc-heading">Mountain View<br/></span>
				1975 W. El Camino Real<br/>
				Suite # 301<br/>
				Mountain View, CA 94040<br/>
				T: +1-866-660-6533<br/>
				F: +1-408-435-2703
			</li>
			<li class="last-li">
				<a class="orange-link" target="_blank"  href="https://maps.google.co.in/maps?q=+Pramati+Technologies+1975+W+El+Camino+Real+%23301,+Mountain+View,+CA,+United+States&hl=en&sll=37.393656,-122.098856&sspn=0.05503,0.132093&t=h&gl=in&hq=Pramati+Technologies+1975+W+El+Camino+Real+%23301,+Mountain+View,+CA,+United+States&radius=15000&z=13">View Map <i></i> </a>
			</li>
		</ul>

		<ul class="ul-address flt-right">
			<li class="first-li">
				<span class="loc-heading">Hyderabad<br/></span>
				Midtown Plaza<br/>
				Road No. 1, Banjara Hills<br/>
				Hyderabad, AP 500034 <br/>
				T: +91 (40) 3355 2000
			</li>
			<li class="last-li">
				<a class="orange-link"  target="_blank"  href="https://maps.google.co.in/maps?q=Pramati+Technologies,+Begumpet,+Hyderabad,+Andhra+Pradesh&hl=en&sll=10.782836,78.288503&sspn=9.475986,16.907959&oq=Pramati+Tech&hq=Pramati+Technologies,&hnear=Begumpet,+Hyderabad,+Andhra+Pradesh&t=m&z=16&iwloc=A">View Map <i></i> </a>
			</li>
		</ul>
	<ul class="ul-address flt-left">
			<li class="first-li">
				<span class="loc-heading">Bengaluru<br/></span>
				15th Floor, World Trade Center <br/>
				Brigade Gateway, Malleswaram<br/>
				Bengaluru, KA 560055<br/>
				T: +91 (80) 4906 9999
			</li>
			<li class="last-li">
				<a class="orange-link" target="_blank" href="https://maps.google.co.in/maps?q=Brigade+Gateway+World+Trade+center+bangalore&hl=en&sll=17.435803,78.456449&sspn=0.132166,0.264187&t=h&hnear=World+Trade+Center+Bangalore,+Brigade+Gateway+Rd,+Subramanyanagar,+Rajajinagar,+Bangalore,+Bangalore+Urban,+Karnataka+560055&z=17">View Map <i></i> </a>
			</li>
		</ul>
		<ul class="ul-address flt-right">
			<li class="first-li">
				<span class="loc-heading">Chennai<br/></span>
				II/8, Origin IT Park<br/>
				Dr VSI Estate, OMR<br/>
				Chennai, TN 600041<br/>
				T: +91 (44) 4411 5600
			</li>
			<li class="last-li">
				<a class="orange-link"  target="_blank"  href="https://maps.google.co.in/maps?q=pramati+chennai&hl=en&sll=17.436394,78.468904&sspn=0.033041,0.066047&t=h&gl=in&hq=pramati&hnear=Chennai,+Tamil+Nadu&z=12&iwloc=A">View Map <i></i> </a>
			</li>
		</ul>
		
		
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop
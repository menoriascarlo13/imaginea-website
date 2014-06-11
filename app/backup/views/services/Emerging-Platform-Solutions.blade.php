@extends('templates.default.default')

	@section('page-title')
		Imaginea Services_eps
	@stop
	@section('body-tag')
		services services_eps
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<label>Emerging Platform Solutions</label>
		<h1>Identify the right technology for your solution</h1>
		<p >
			You're watching your competition evolve and innovate, but you're stuck thinking about it. There's a business opportunity hidden in the buzzwords: social, cloud, mobile, big data; how can you capitalize on it?
		</p>
	@stop
	@section('main-strip-right')
		@include('services.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement</label>
			" Once the solution was agreed on and the challenges identified, the transition to the next phase was seamless. We implemented the solution and securely deployed it to Amazon Web Services. "
		</p>
		<p >
			Which one will develop into new opportunities for your business? How can you move fast, choose wisely, and solve business problems?
		</p>
		<p >
			Imaginea can help. Our expertise in disruptive technologies will guide you down the right path. Want to connect better with your customers? Let us talk to you about how we've harnessed social networks to generate real-world ROI for our customers. Need to extract knowledge from your digital storehouse of numbers? We've created dashboards with the newest technology and we can do it for you, too.
		</p>
		<p>
			Thinking about the cloud? Read on for a recent project we did for a F1000 client.
		</p>
		<p class="imaginea-diff">
			<label class="bold">The Imaginea Difference:</label>
			<i class="numbered-bullet">1</i> Our EPS practice area is focused on the four disruptive technologies that are creating threats, and opportunities in today's marketplace. Our portfolio includes multiple implementations on each of these technologies, and long-standing development partnerships with key vendors like Amazon Web Services, HP Cloud and Intuit QuickBase.
		</br></br>
			<i class="numbered-bullet">2</i> We engage in the development communities early. From the initial stages of Hadoop to SocialTwist, our own award-winning platform for social networks, we're hands-on in the marketplace. It gives us early visibility to market trends and technology solutions. We practice, then preach.
		
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

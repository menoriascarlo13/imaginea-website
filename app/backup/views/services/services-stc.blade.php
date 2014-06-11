@extends('templates.default.default')

	@section('page-title')
		Imaginea Services_stc
	@stop
	@section('body-tag')
		services services_stc
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<label>Strategy & Technology Consulting</label>
		<h1>Identify the threat > assess the opportunity </h1>
		<p >
			You are an established player with marquee clients. Yet younger companies with newer technologies constantly challenge and nip at your business. They are nimble, they innovate without constraints, and they seek to disrupt.
		</p>
	@stop
	@section('main-strip-right')
		@include('services.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement</label>
			" For a recent customer engagement, we leveraged the power of big data technology to help a major automotive industry player add new retailers to their network without adding manpower in the back office.  "
		</p>
		<p>
			New cloud, social, mobile and big data platforms let them disregard the legacy requirements that burden your business and slow your response. Their newer solutions are untested, but dazzle your customers. This is your threat.
		</p>
		<p>
			But within this threat lies your next opportunity.
		</p>
		<p>
			Imaginea can help you uncover this. Our consulting services have grown out of a deep understanding of actual customer problems - like the ones your clients face - that we have helped resolve with new platforms and solutions. We give you the freedom to explore new options, without disrupting your current investments and existing clients. We bring the knowledge of newer technologies and the solutions they can empower. We can help you think through new market solutions, prototype them for you, and even take them to production. Along the way we can help manage all the appropriate decision points.
		</p>
		<p class="imaginea-diff">
			<label class="bold">Our Difference </label>
			<i class="numbered-bullet">1</i> We are not management consultants or a pure strategic advisory that leaves you with the difficult decisions around implementation.</br></br>
			<i class="numbered-bullet">2</i> We understand business problems, and have the full expertise in crafting the technologies required for their solution. Our experience stems from working with customers and also from other sister Pramati companies like SocialTwist (a social referral marketing platform) that serve Global 500 class customers today.
		
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

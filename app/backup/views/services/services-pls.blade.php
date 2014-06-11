@extends('templates.default.default')

	@section('page-title')
		Imaginea Services_pls
	@stop
	@section('body-tag')
		services services_pls
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<label>Product Lifecycle Services</label>
		<h1>Full scale product development and roll out</h1>
		<p >
			You have the inspiration for a new product that will change the course of your business, but it's a long way from reality, even though you've done the market and customer research.  You run a lean organization: all your resources are committed to programs that you can't abandon.
		</p>
	@stop
	@section('main-strip-right')
		@include('services.sub_nav')
	@stop
	@section('main-content-left')
		<p class="italic">
			<label class="bold">An Imaginea Engagement</label>
			" An on-demand sales solution startup was planning to break into the next league. They had prepared the road map, and had a good understanding of the requirements of their customer base and the supporting business model. Their most pressing need was for a long-term engineering partner who could share the development effort with equally high quality standards. This was five years ago, today they are the global leader in their segment.
			"
		</p>
		<p class="normal">
			Yet in a shifting market you can't afford to ignore nimble competitors and disruptive technologies. Hiring a full team is impossible: it takes too long, talent is scarce, and the risk is too high. But sitting back forgoes the opportunity. So how can you seize it?
		</p>
		<p class="normal">
			Imaginea's team is fully staffed and well-versed in critical technologies driving today's innovative products. We've created full-scale, production-ready products for clients around the globe. We've also done it for the trickiest client of them all: ourselves. Our track record includes Qontext (acquired by Autodesk) and the award-winning SocialTwist, both companies spun off by our corporate parent. Both are leaders whose products were developed in our labs.
		</p>
		<p class="normal">
			We can do the same for your business. We can build the product you're dreaming of, quickly and cost-effectively, so you can move fast to market and play where the puck is going to be.
		</p>
		<p class="imaginea-diff">
			<label class="bold">The Imaginea Difference:</label>
			<i class="numbered-bullet">1</i> Our enterprise software heritage and history of in-house product development for our own companies proves our ability to build software products that achieve real-world success.
		</br></br>
			<i class="numbered-bullet">2</i> Our experience in social, mobile, cloud and big data ensures that our team has the specific expertise you need, whether it's understanding battery consumption on mobile devices or customer retention on social networks.
		
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

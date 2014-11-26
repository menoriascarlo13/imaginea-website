@extends('templates.default.default')

	@section('metas')
		
		<meta name="description" content="Imaginea has a full suite of comprehensive business technology services that take care of everything from ideation to migration and maintenance. " />
		<meta name="keywords" content="Enterprise consulting, technology consulting services, engineering services, prototype development, product development lifecycle, Imaginea services" />
	@stop

@section('page-title')
		Imaginea Services
@stop
@section('body-tag')
		services services_landing
@stop
@section('main-content-left') 
		<h1>How will you innovate in your business?</h1>
		<h2> At Imaginea we answer this question everyday for our clients-and then we help them do it. Leveraging the power of today's disrupting technologies - social, mobile, cloud and big data - we help customers innovate to capture opportunity in a changing market. </h2>
		<h5 style="text-align: center;" class="regular-font">How Imaginea Drives the Innovation Process</h5>
		<div class="wheel-bg" >
			<i class="wheel-hover"></i>
			<div class="stc"></div>
			<div class="eps"></div>
			<div class="ipm"></div>
			<div class="pls"></div>
			<div class="tse"></div>
			<div class="wheel-center">
				<p class="p-stc">
					Brainstorm strategy that converts a threat into an opportunity
				</p>
				<p class="p-eps" style="margin-top:15px">
					Support your strategy with disruptive technologies
				</p>
				<p class="p-ipm" style="margin-top:15px">
					Develop early prototypes for stakeholder buy-in
				</p>
				<p class="p-pls" style="margin-left:-3px;margin-right:-3px">
					Build and deploy innovative solutions for your customers
				</p>
				<p class="p-tse" style="margin-top:15px">
					Support and/or migrate your legacy solutions
				</p>
			</div>
		</div>
		<div class="shaded">
			<h5>Imaginea Engagement Examples</h5>
			
			<ol>
		<li>
			<p>
				We helped a customer in the financial services industry choose the best technology for their needs and ensure the highest level of security when they migrated their applications to the cloud.
			</p>
			<i class="numbered-bullet">1</i>
		</li>
		<li>
			<p>
				We helped a major insurance broker with a complex big data project, providing them not just ad hoc reporting, but data visualization and trend analysis to help them draw knowledge from numbers.
			</p>
			<i class="numbered-bullet">2</i>
		</li>
		<li>
			<p>
				We served as the trusted development partner for an on-demand sales solution startup that is now the global leader in their space. Because we provide the high level of quality they require for their product, our team works hand in hand with theirs in a collaborative, results-oriented development process.
			</p>
			<i class="numbered-bullet">3</i>
		</li>
	</ol>
			
			
			
		</div>
		<h5>We can engage at any stage in the process. Whether you're:</h5>
		<ul class="dotted">
			<li>
				looking for advice from an experienced source
			</li>
			<li>
				poised to start new development
			</li>
			<li>
				ready to hand off a current project while you move on to the next one
			</li>
		</ul>
		<div class="shaded">
			<h5>Imaginea can help:</h5>
			
			<ol>
		<li>
			<p>
				We bring expertise in critical disruptive software technologies
			</p>
			<i class="numbered-bullet">1</i>
		</li>
		<li>
			<p>
				We have deep experience across multiple technology platforms and a range of industries
			</p>
			<i class="numbered-bullet">2</i>
		</li>
		<li>
			<p>
				Our product-centric approach focuses on bringing your solutions to market
			</p>
			<i class="numbered-bullet">3</i>
		</li>
	</ol>
			
			
			
		</div>
@stop
@section('main-content-right')
		@include('services.sub_nav')
		@include('about.sub_mainstrip_right')
@stop 
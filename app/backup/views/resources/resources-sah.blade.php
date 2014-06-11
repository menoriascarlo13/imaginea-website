@extends('templates.default.default')

	@section('page-title')
		Imaginea Resources
	@stop
	@section('body-tag')
		resources resources_sah
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<h1>Social Analytics With Hadoop</h1>
		<p>
			Millions of people on the Internet leave terabytes of digital footprints. Connecting these dots for the bigger picture is crucial to social media, eCommerce and other internet companies. How do you analyze such vast and unstructured information to yield actionable intelligence? </p>
				
	@stop
	@section('main-strip-right')
		@include('resources.sub_nav')
	@stop
	@section('main-content-left')
		
						<p>
							SocialTwist came to us with the same question. We answered it using Hadoop Map/Reduce — a software framework for writing applications which <a  target="_blank" style="float: right; display: block;margin: 20px;border:1px solid #ccc;" href="/images/resources/case-studies/case-study.pdf"><img src="/images/resources/case-studies/case-study-hadoop.png" /> </a>process multi-terabytes of data in parallel on large clusters of commodity hardware, all this in a reliable, fault-tolerant way.
		
		SocialTwist's marketing platform uses their Tell-A-Friend widget that serves billions of impressions containing key information in the form of web activity logs. They needed a solution that not only analyzes and reports campaign efficacy data but also one that is easy to develop and implement over their existing infrastructure.
		Hadoop Analytics and Administration
		
		We applied Hadoop Map/Reduce and were able to analyze terabytes of web activity logs at just one-tenth of the processing time. To convey the bigger picture out of these crumbs of information,
		 we built a front-end using Ruby on Rails. Not only does it give detailed information on the underlying tasks and data in the database,
		 <img style="margin:0 auto; margin-top:40px;margin-bottom: 40px;width:570px;" src="/images/cs-hastaf.png"> it also serves as a dashboard of vital metrics like Top Sites and Top Users. SocialTwist can now relay key customer behavior and campaign efficacy information that much faster to their clients.
						</p>
				
						<p class="imaginea-diff">
							<label class="bold">The new HUE Hadoop and beyond</label>
						
							Moreover, we made it extremely simple to administer Hadoop Map/Reduce tasks by modifying HUE (Hadoop User Experience) — a web UI for Hadoop, started by Cloudera. Applying our expertise and knowledge of Django, Python & MooTools, we forked out a modified HUE that goes further in managing and administering Map/Reduce tasks.

			    You can plan job execution better by deciding how many nodes you would need. There is also a wizard guides on history of job execution.
			    You get the best of both worlds with connectivity to Apache Hadoop.
			    Also, there is better upload support with uploads to S3.
			
			With richer information of job execution and easy to use UI, the modified HUE takes administration of Hadoop to the next level — making it easier for developers to get more out of Hadoop in a short period of time.
						</p>
					
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

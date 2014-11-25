@extends('templates.default.default')

	@section('page-title')
		Imaginea Resources
	@stop
	@section('body-tag')
		resources resources_sah
	@stop
	@section('banner-right') 
		<h1>Resources</h1>
	@stop
	@section('main-content-left')
		<h1>Social Analytics With Hadoop</h1>
		<h2>Millions of people on the Internet leave terabytes of digital footprints. Connecting up all this information to draw the bigger picture is critical to social media, eCommerce and other other companies. But how do you analyze such vast and unstructured data to extract actionable insight? </h2>
		<p>	SocialTwist came to us with a similar question. We answered it using Hadoop MapReduce — a software framework for writing applications that <a  target="_blank" style="float: right; display: block;margin: 20px;border:1px solid #ccc;" href="/images/resources/case-studies/case-study.pdf"><img src="/images/resources/case-studies/case-study-hadoop.png" alt="Imaginea case study - Social analytics with Hadoop"/> </a>process terabytes of data in parallel on large clusters of commodity hardware, in a reliable and fault-tolerant manner.</p><p>
			SocialTwist's marketing platform uses their Tell-A-Friend referral widget that serves billions of impressions, while generating key information in web activity logs. They needed a solution that would analyze and report campaign performance, but remain easy to develop and implement over their existing infrastructure.
		</p>
		<p>	
	We applied Hadoop MapReduce and were able to analyze terabytes of web activity logs in a tenth of prior processing time. To convey the bigger picture out of these crumbs of information, we built a front-end using Ruby on Rails. 
		 <img style="margin:0 auto; margin-top:40px;margin-bottom: 40px;width:570px;" src="/images/cs-hastaf.png" alt="Hadoop MapReduce front-end"> 
	This provided detailed information on the underlying tasks and data in the database and also served as a dashboard for vital marketing metrics, like top sites and top users. SocialTwist can now report consumer behavior and campaign performance information more quickly and effectively to their clients.
		</p>
				
		<div class="shaded">
			<h5>The new HUE Hadoop and beyond</h5>
			<p>
			We also made it extremely simple to administer Hadoop MapReduce tasks by modifying HUE, or Hadoop User Experience — a web UI for Hadoop offered by Cloudera. Applying our expertise and knowledge of Django, Python & MooTools, we forked out a modified HUE that improves the management and administration of MapReduce tasks.
			<p/>
			<p>
			You can plan your job execution better by deciding how many nodes you would need. There are now wizard guides on the history of job execution. You get the best of both worlds with connectivity to Apache Hadoop. There also is better upload support through uploads to S3.
			<p/>
			<p>		
			With richer information on job execution and a pleasing UI, the modified HUE demonstrably improves the administration of Hadoop, making it easier for developers to get more out of Hadoop, more quickly.
			</p>
		</div>
					
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

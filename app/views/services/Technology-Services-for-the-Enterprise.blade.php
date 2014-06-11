@extends('templates.default.default')

@section('page-title')
Imaginea Services
@stop
@section('body-tag')
services services_tse
@stop
@section('banner-right')

@stop
@section('main-strip-left')

@stop
@section('main-strip-right')
@include('services.sub_nav')
@stop
@section('main-content-left') <label>Technology Services for the Enterprise</label>
<h1>Support, upgrades and migration</h1>
<h2 > You're facing the reality of migrating from the old way to the new. You see opportunity in the new landscape. You've committed some of your best people and you've reallocated some resources. </h2>
<div class="shaded">
	<h5>An Imaginea Engagement</h5>
	<p class="italic">
		A large bulk-auction company from the Web 1.0 era asked us to migrate them from an outdated, monolithic PERL implementation to a Web 2.0 user experience. First we devised a migration strategy. Our engineers built a new set of APIs for their core transactional engine and tied this to a new Javascript-based user interface we built, giving their users an immediate Web 2.0 experience. Next we worked on a new backend that would replace the old and tie back in to the new UI. This approach allowed us to phase in a spanking new system, while maintaining all service requirements.
	</p>
	<p class="read-more-content italic">
		Over-loaded IT departments find it easier to do what it takes to keep a
		legacy application alive, rather than rebuild from scratch. We helped this
		customer have their cake and eat it too: architect and rebuild a new transactional system, while managing and maintaining their old and avoiding disruption to customer service. Subsequently we managed the account
		migration to the new platform that now met their planned
		requirements for security and scalability.
	</p>
	<i class="read-more-toggle" > Read More </i>
</div>
<p>
	But getting there doesn't happen overnight. Much as you would like to unplug your legacy systems and move forward, you have customers today. You must ensure the continuity of their business and your revenue stream. How can you manage both old and new and provide your organization that seamless move to the future?
</p>
<p>
	The TSE Practice at Imaginea can help. Our software maintenance, support, and managed services teams can ensure the smooth and systematic migration of your systems. Our teams work hand-in-hand with yours on the maintenance and ongoing support of your existing systems and projects, freeing you to innovate.
</p>
<div class="shaded">
	<h5>The Imaginea Difference</h5>
	<ol>
		<li>
			<p>
				 We understand the old and the new. We have deep experience on Java and .Net platforms, tools and frameworks like Eclipse, Spring, Hibernate, Cognos, Business Objects, legacy systems like SAP and Oracle, and cloud technologies.  We manage and migrate existing platforms for clients. We can manage, support, and maintain your systems, as an intermediate project (pending migration) or as an ongoing customer solution.
			</p>
			<i class="numbered-bullet">1</i>
		</li>
		<li>
			<p>
				 We understand the requirements of true enterprise-class systems. From scalability to security, our team takes a proactive approach to ensuring that we meet the SLAs promised to your customers.
			</p>
			<i class="numbered-bullet">2</i>
		</li>
	</ol>
</div>
@stop
@section('main-content-right')
@include('services.sub_nav')
@include('about.sub_mainstrip_right')
@stop 
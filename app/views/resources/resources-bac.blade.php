@extends('templates.default.default')

	@section('metas')
		
		<meta name="description" content="This downloadable white paper delves into the issues facing cloud application development and explores alternative technologies." />
		<meta name="keywords" content="Imaginea white papers, building cloud applications" />
	@stop

@section('page-title')
	Imaginea White Paper - Building Applications for the Cloud
@stop
@section('body-tag')
	resources resources_bac
@stop
@section('banner-right') 
	<h1>Resources</h1>
@stop
@section('main-content-left') 
	<h1>Building Applications for the Cloud</h1>
	<h2> Cloud Computing has completely changed the face of computing and and software development, deployment and use. It has ushered in the era of software as a service that has set new service expectations by customers. </h2>
	<p>
		Web applications today need to be more reliable than ever. Cloud applications in particular impose very specific technical requirements: high reliability,<a target="_blank" style="float: right; display: block;margin: 20px;border:1px solid #ccc;" href="/images/resources/white-papers/white paper 2.pdf"><img src="/images/resources/white-papers/whitepaper-cloud.png" alt="Imaginea white paper - Building applications for the cloud"/> </a> dynamic scalability and low latency across all layers. They must scale dynamically with increase in users and data volumes. Scaling poses the biggest challenge and many IT shops have responded by simply adding more resources, making this a very expensive proposition for many organizations.
	</p>
	<p>
		This paper examines the issues involved in building such applications and also explores alternate technologies such as master-slave replication, sharding and denormalization. We also look at datastore implementations used by several large commercial players that address this issue without resorting to expensive vertical scaling techniques.
	</p>
	<p>
		As applications migrate to the cloud, these technologies offer great promise in both costs and performance. We share some of the lessons and experiences of Imaginea engineers in building applications for the cloud, and offer our recommendations.
	</p>
	<p>
		Download this white paper on building better cloud applications. Tell us what you think.
	</p>
@stop
@section('main-content-right')
	@include('about.sub_mainstrip_right')
@stop 
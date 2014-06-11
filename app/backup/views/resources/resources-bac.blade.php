@extends('templates.default.default')

	@section('page-title')
		Imaginea Resources
	@stop
	@section('body-tag')
		resources resources_bac
	@stop
	@section('banner-right') 
		
	@stop
	@section('main-strip-left') 
		<h1>Building Applications for Clouds</h1>
		<p>
			The arrival of Cloud Computing has completely changed the face of computing and how software is used. Cloud Computing has ensured the era of software a service instead of it being treated like a commodity, sold to users.
		</p>	
	@stop
	@section('main-strip-right')
		@include('resources.sub_nav')
	@stop
	@section('main-content-left')
		<p>
			Today, web applications need to be more reliable than ever. When an application is to be built for operating over the cloud, some technical aspects that are of paramount importance, and which require serious consideration are: high reliability,<a target="_blank" style="float: right; display: block;margin: 20px;border:1px solid #ccc;" href="/images/resources/white-papers/white paper 2.pdf"><img src="/images/resources/white-papers/whitepaper-cloud.png" /> </a>dynamic scalability and low latency across all layers. They must scale dynamically, as users and data volumes increase. Scaling up offers the biggest challenge and many have taken it on by adding more resources. However, this can be a very expensive proposition for many organizations.

			This paper examines the issues involved in building such applications and also explores alternate technologies such as master-slave replication, sharding and denormalization; and also looks at datastore implementations used by commercial players, which can be used without resorting to expensive vertical scaling techniques.

			In the light of the current attempts to move applications to the Cloud, these technologies hold great promise. The paper also shares the relevant recommendations, learning and experience of engineers at Imaginea with respect to building application for the cloud.

			Download the white paper to build better cloud applications.
		</p>
	@stop
	@section('main-content-right')
		@include('about.sub_mainstrip_right')
	@stop

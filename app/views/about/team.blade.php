@extends('templates.default.default')

	@section('metas')
		
		<meta name="description" content="Read about the people behind Imaginea and how they contribute to innovation, growth and a rewarding company culture." />
		<meta name="keywords" content="Imaginea team, meet the team" />
	@stop

	@section('page-title')
		The Imaginea Team 
	@stop
	@section('body-tag')
		about about_team
	@stop
	@section('banner-right') 
		<h1>about</h1>
		<h2>imaginea</h2>
	@stop
	@section('main-content-left')
		<!--
				<h3 style="margin-top: 0px;">Jay Raghavendra Pullur</h3>
				<p>
					Founder & Chairman of Board
				</p>
				<p>
					Jay is the founder and CEO of Pramati Technologies Private Limited. He is both a technology management expert and visionary with over 20 years of experience. Jay has been advising and mentoring Imaginea Inc. for several years. Jay earned his Master's degree in Computer Science from the Indian Institute of Technology Kanpur with top honors.
				</p>
				<h3>Vijay Pullur</h3>
				<p>
					Co-Founder & President
				</p>
				<p>
					Vijay co-founded Pramati Technologies, a pioneer in Java Application Server space and the world's first product in the space to achieve J2EE certification. Having mentored people at the workplace for more than 20 years, as an entrepreneur, Vijay is focused on building a strong organization with great values, quality and customer satisfaction. Vijay holds a Bachelor's degree in Computer Science.
				</p>
		-->		
		<h1>Team</h1>
		<h2>
			Our strength is in our people.

			Our leadership team brings world-class experience in product development and services. 
		</h2>
		
		<ul>
			<li>
				<h3>K V Prasad</h3>
				<p><b>Chief Operating Officer</b></p>
				<p>
				Prasad has been in the industry for more than 20 years, in a range of positions spanning financial operations, P&L management, strategic planning, human resource, delivery, and operations management. As the COO, Prasad is focused on the vision and long-term strategy of the company. Prasad has evolved business and operational models in organizations focusing on operational efficiency and maximization of shareholder returns. His goals are supporting rapid revenue growth, new markets, business plans, operations aiming at building a vibrant and profitable organization. In addition to
				his work with Imaginea, Prasad  works closely with the founding team on the vision and long term strategy for Pramati. Prior to Pramati, Prasad was Financial Controller for Asia Pacific at NIIT based out of Singapore.
				</p>
			</li>
			<li>
				<h3>Chandrashekar Sivaraman</h3>
				<p><b>VP Engineering Services</b></p>
				<p>
				Chandrashekar (Chandru) leads a team of creative minds at Imaginea, developing innovative and user-friendly interactive products for Imaginea's global customers in mobile, social media, and consumer segments. Chandru brings knowledge acquired over 15 years in the area of communications. He also oversees corporate messaging and branding elements for the company. Previously Chandru was a technnology writer and journalist.
				</p>
			</li>
			<li>
				<h3>Giri Kuthethoor</h3>
				<p><b>VP Engineering Services</b></p>
				<p>
				Giri brings leadership, excellence, and scale to engineering teams at Pramati providing technology services to enterprises. Prior to joining Pramati, Giri worked at Cisco Systems where he managed a development team performing software development, enhancements and support. As part of enhanced Broadband deployment all over the world, Giri worked with AT&T, China Telecom, Verizon and internal marketing teams at Cisco to formulate the roadmap for software deliverables meeting the market timeline. Giri was earlier with Lockheed Martin and holds patents in optimizing network state dissemination and provide better QoS in mobile ad-hoc networks. Giri holds a Master
				of Science in Computer Science from the University of Kentucky.
				</p>
			</li>
			<li>
				<h3>Harish Thirumalai</h3>
				<p><b>VP Finance</b></p>
				<p>
				Harish has more than 15 years experience in Finance, Accounting, Taxation & Treasury. His direct experience with financial consulting and venture capital has proven extremely helpful to Imaginea. Harish is a certified Chartered Accountant from Institute of Chartered Accountants of India and is also a qualified Cost Accountant from the Institute of Cost and Works Accountants of India.
				</p>
			</li>
			<li>
				<h3>Chetan Shinde</h3>
				<p><b>VP HR</b></p>
				<p>
				Chetan heads the Human Resources function at Pramati Technologies, and is responsible for the company's talent acquisition, HR operations and people practices. He is a technologist-turned-HR professional with over 19 years of industry experience, primarily driving HR strategies for emerging companies. His experience in running software engineering divisions with end-to-end P&L responsibilities adds functional and operational knowledge to the HR domain. Prior to joining Pramati, he was Vice-President at July Systems where he managed HR and the solutions services business operations. He has also headed the global HR function at Mindteck and previously at Aditi Technologies, where he spent over 10 years, spanning roles across engineering delivery and HR.
				</p>
			</li>
		</ul>
	@stop
	@section('main-content-right')
		@include('about.sub_nav')
		@include('about.sub_mainstrip_right')
	@stop

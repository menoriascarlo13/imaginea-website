@include('templates.default.header')
	<div class="error-box">
		<h1 class="error-1"> OOPS! THAT PAGE DOES NOT EXIST.</h1>
		<h5 class="error-2">One of these links may help.</h5>
	</div>
	<section style="position: absolute;bottom: 0;" class="footer">
			<div class="wrapper-left">
				<div class="footer-wrap-a">
					<div class="footer-row-a">
						<ul>
							<li class="first-li" >
								About
							</li>
							<li>
								<a href="/about/history">History</a>
							</li>
							<li>
								<a href="/about/team">Team</a>
							</li>
							<li>
								<a href="/about/careers">Careers</a>
							</li>
							
							<li>
								<a href="/contact/locations">Locations</a>
							</li>

						</ul>
					</div>
					<div class="footer-row-b">
						<ul>
							<li class="first-li" >
								Services
							</li>
							<li>
								<a href="/services/Strategy-and-Technology-Consulting">Strategy & Technology Solutions</a>
							</li>
							<li>
								<a href="/services/Emerging-Platform-Solutions">Emerging Platform Solutions</a>
							</li>
							<li>
								<a href="/services/Innovation-and-Product-Management">Innovation & Product Management</a>
							</li>
							<li>
								<a href="/services/Product-Lifecycle-Services">Product Lifecycle Services</a>
							</li>
							
							<li>
								<a href="/services/Technology-Services-for-the-Enterprise">Technology Services for Enterprise</a>
							</li>
						</ul>
					</div>
					
					<div class="footer-row-d">
						<ul>
							<li class="first-li" >
								Contact Us
							</li>
							<li>
								1975 W. El Camino Real, Suite 301,
							</li>
							<li>
								Mountain View, CA 94040
							</li>
							<li>
								T: +1-866-660-6533
							</li>
							<li>
								info@imaginea.com
							</li>
						</ul>
					</div>
					<div class="footer-row-c">
						<ul>
							<li class="first-li" >
								Technology
							</li>
							<li>
								<a href="/technology/Cloud">Cloud</a>
							</li>
							<li>
								<a href="/technology/Mobile">Mobile</a>
							</li>
							<li>
								<a href="/technology/Social">Social</a>
							</li>
							<li>
								<a href="/technology/Big-Data">Big Data</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="wrapper-right">
				<p>
					Copyright &#169; 2013 Imaginea Technologies, Inc. All Rights Reserved. Imaginea is a registered trademark. All other trademarks belong to their respective owners.
				</p>
			</div>
		</section>
		<script type="text/javascript">

			$(document).ready(function(){

				/*
				 *  For highlighting the active sub navigation menu in the technology page. 
				 */
				$('.tech-list li a').each(function(index) {
			        if(this.href.trim() == window.location)
			        {
			        	$(this).parent().parent().children('li').removeClass("selected");
			            $(this).parent().addClass("selected");
			        }
			    });

				/*
				 * For highlighting the active main menu
				 */
			    $('.main-nav li a').each(function(index) {
			        $('.mn-'+window.location.pathname.split('/')[1]).addClass('selected');
			    });

				/*
				 *  For highlighting the active sub navigation menu in all page except technology page. 
				 */
			    $('.sub-nav a').each(function(index) {
		          if(this.href.trim() == window.location)
		          {
		              $(this).parent().parent().parent().children().removeClass('selected');
		             $(this).parent().parent().addClass('selected');
		          }
			    });

			    /*
			     *  For handling the ContactUs submission
			     */
			    $('#contact-form').submit(function(){

			    	var data = $(this).serialize();

			    	$('button.send-query').text('Sending...');
			    	$('.ajax-loader').show();
			    	$(this).children().attr('disabled', true);
			    	
			    	$.post('/send_mail', data,  function(result) {
			    		result = JSON.parse(result);
			 		   $('#contact-form').hide();	
					   $('.main-content h1').text(result.message);
					});

					return false;
				});
			});
		</script>
	</body>
</html>
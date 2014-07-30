<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Categories and Default items
	|--------------------------------------------------------------------------
	|
	| Configure the Categories and Its default items here.
	| 
	| 
	|
	*/	

	'categories' => array(

		'about' => array(

				'default' => 'about'
			),
		'services' => array(

			'default' => 'services'

			),
		'technology' => array(
			
			'default' => 'Cloud'

			),
		'contact' => array(
			
			'default' => 'form'

			),
		'resources' => array(
			
			'default' => 'resources-sah'

			)
		),

	/*
	|--------------------------------------------------------------------------
	| Emails
	|--------------------------------------------------------------------------
	|
	| Configure the emails to which the Inquiry should be sent.
	| 
	| 
	|
	*/

	'emails' => array(

			'Info'		=>	'info@imaginea.com',
			'Abby'      =>	'abbydomine@yahoo.com',
            'Chandru'   =>	'chandru@imaginea.com'
			
		),

	'campaigns' => array(

			'DX-2676'	=> array(

					'name' => 'Cloud Operations Management ',
					'form_id' => '',
					'email_template' => 'emails.campaigns.cloud_operation_management',
					'email_subject'  => 'Imaginea Online Inquiry - Cloud Operations Management',
					'emails' => array(
							'Arun'  => 'arun@imaginea.com'
							/*'Aneesh ' => 'aneesh.e@imaginea.com'*/
						),
					'success_message' => 'Thank you for contacting us!'
				)


		) 
	);
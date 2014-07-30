<?php

class CampaignController extends BaseController {

	public function index() {

		$input = Input::all();

		$campaign_id = $input['form_id'];

		$campaign_settings = Config::get('app_config.campaigns.' . $campaign_id . '');


		if( $this->_send_mail($input, $campaign_settings) )
		{
			return Response::json([
	            'error' => false,
	            'message' => $campaign_settings['success_message'] ],

	            200
	        );
		}
	
	}


	public function _send_mail($input, $campaign_settings )
	{

		$data = array('data' => $input);

		Mail::send($campaign_settings['email_template'], $data, function($m) use ( $campaign_settings )
		{
			foreach ( $campaign_settings['emails'] as $name => $email) 
					$m->to($email, $name)->subject($campaign_settings['email_subject']);	    

		});
		
		return 'true';
	}
}
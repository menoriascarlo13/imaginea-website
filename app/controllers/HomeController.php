<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/



	public function index($cat = null, $page = null)
	{
        
        if( File::exists(app_path(). '/views/' . $cat))
        {
            if( is_null($page))
            {
                $page = Config::get('app_config.categories.'. $cat . '.default');
            }
            elseif( ! File::exists(app_path(). '/views/' . $cat . '/' . $page . '.blade.php'))
            {
                return View::make('error.error');
            }
            
            return View::make($cat. '.' . $page);
        }
        else
        {
            return View::make('error.error');
        }
	}


	public function send_mail()
	{

		$input =  Input::all();
		$data = array('data' => $input);
		
		Mail::send('emails.welcome', $data, function($m)
		{
			foreach (Config::get('app_config.emails') as $name => $email) 
					$m->to($email, $name)->subject('Imaginea Online Inquiry');	    

		});
		
		return Response::json([
            'error' => false,
            'message' => 'Thank you for contacting us!'],
            200
        );
	}




/*	public function test()
	{
		$validator = Validator::make(
		    array('name' => 'Dale'),
		    array('name' => array('required', 'min:5'))
		);

		if ($validator->fails())
		{
		    // The given data did not pass validation
		    return 'Failed';
		}
	}*/
	
}

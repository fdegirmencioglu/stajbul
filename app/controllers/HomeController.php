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

	public function showWelcome()
	{
		if ( ! Sentry::check())
		{	
    		// User is not logged in, or is not activated
    		return View::make('/');
		}
		else
		{
    		// User is logged in
    		return View::make('home');
		}

		
	}

}

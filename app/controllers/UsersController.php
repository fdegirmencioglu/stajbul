<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Kullanici::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 if(Input::get('add_manager') == true){
				Sentry::register(array(
					'first_name' => Input::get('first_name'),
					'last_name'  => Input::get('last_name'),
					'username'    => Input::get('username'),
					'display_name'    => Input::get('display_name'),
					'email'    => Input::get('email'),
				  'password' => Input::get('password'),
				  'website' => Input::get('website'),
				  'activated' => true
				));
			return Redirect::back();
		 
		 }else{
			Sentry::register(array(
				'first_name' => Input::get('adi'),
				'last_name'  => Input::get('soyadi'),
				'email'    	 => Input::get('email'),
			  'password'   => Input::get('password'),
			  'activated'  => false
			));
		 }
		return Redirect::to('/');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $user = User::find($id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		 $user = User::find($id);
		 if(Input::get('password') != null){
		 		//sadece password'ü güncelle
        $user->password = hash(Input::get('new_password'));
        $user->save();
		 }else{
		 	  // store 
	      $user->first_name = Input::get('first_name');
	      $user->last_name  = Input::get('last_name');
	      $user->username = Input::get('username');
				$user->display_name = Input::get('display_name');
	      $user->email = Input::get('email');
	      $user->website = Input::get('website');
	      $user->save();
		 }
      return View::make('admin.profile');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function hash($string)
	{
	    // Usually caused by an old PHP environment, see
	    // https://github.com/cartalyst/sentry/issues/98#issuecomment-12974603
	    // and https://github.com/ircmaxell/password_compat/issues/10
	    if (!function_exists('password_hash')) {
	        throw new \RuntimeException('The function password_hash() does not exist, your PHP environment is probably incompatible. Try running [vendor/ircmaxell/password-compat/version-test.php] to check compatibility or use an alternative hashing strategy.');
	    }

	    if (($hash = password_hash($string, PASSWORD_DEFAULT)) === false) {
	        throw new \RuntimeException('Error generating hash from string, your PHP environment is probably incompatible. Try running [vendor/ircmaxell/password-compat/version-test.php] to check compatibility or use an alternative hashing strategy.');
	    }

	    return $hash;
	}




}

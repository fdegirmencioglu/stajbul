<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$hata_mesaji = '';
		//hatırla checkbox'ı seçiliyse $hatirla'nın değerini true yapar
		$hatirla = false;
		if (Input::get('hatirla') == 'on'){
			$hatirla = true;
		}

		try
		{
		    // Login credentials
		    $credentials = array(
		        'email'    => Input::get('email'),
		        'password' => Input::get('password'),
		    );

		    // Authenticate the user
		    $user = Sentry::authenticate($credentials, $hatirla);


		    return Redirect::to('/home');
		    //Sentry::authenticateAndRemember($credentials);
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			return Redirect::back()->withErrors('Kullanıcı alanını boş bırakmayınız.');
				//return Redirect::to('/')->with('Hata', 'Kullanıcı alanını boş bırakmayınız.');
		    //$hata_mesaji = 'Kullanıcı alanını boş bırakmayınız.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return Redirect::back()->withErrors('Şifre alanını boş bırakmayınız.');
			//return Redirect::to('/')->with('Hata', 'Şifre alanını boş bırakmayınız.');
		    //$hata_mesaji = 'Şifre alanını boş bırakmayınız.';
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			return Redirect::back()->withErrors('Hatalı şifre, tekrar deneyin.');

			//return Redirect::to('/')->with('Hata', 'Hatalı şifre, tekrar deneyin.');
		    //$hata_mesaji = 'Hatalı şifre, tekrar deneyin.';
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::back()->withErrors('Kullanıcı bulunamadı.');
			//return Redirect::to('/')->with('Hata', 'Kullanıcı bulunamadı.');
		    //$hata_mesaji = 'Kullanıcı bulunamadı.';
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			return Redirect::back()->withErrors('Kullanıcı aktif değil.');
			//return Redirect::to('/')->with('Hata', 'Kullanıcı aktif değil.');
		    //$hata_mesaji = 'Kullanıcı aktif değil.';
		}





		/*$input = Input::all();
		
		dd($input);

		$attempt = Auth::attempt([
			'eposta' => $input['email'],
			'sifre' => $input['password']
			]);

		if($attempt) return Redirect::intended('/');
		//dd($input);
*/
//dd( Hash::make(Input::get('password')) );

	/******************$auth = User::where('email', '=', Input::get('email'))->where('password', '=', Input::get('password'))->first();
    
 

    if($auth){
      Auth::login($auth);
      return Redirect::to('/password.remind');
    }else{
      return Redirect::to('/');
    }*/



	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Sentry::logout();
		//Auth::logout();
		//return Redirect::home();
		return Redirect::to('/');
	}


}

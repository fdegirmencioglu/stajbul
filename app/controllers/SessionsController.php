<?php

class SessionsController extends \BaseController {


	public function log_ekle(){
		//aktif kullanıcıyı al
		$user = DB::table('users')
        ->join('users_groups', function($join)
        {
			$current_user_id = Sentry::getUser()->id;

            $join->on('users.id', '=', 'users_groups.user_id')
                 ->where('users_groups.user_id', '=', $current_user_id );
        })
        ->get();

    
		$log = new Logs;
		$log->group_id = $user[0]->group_id;
		$log->user_id = $user[0]->user_id;
		$log->kullanici_adi = $user[0]->username;
		$log->ip_address = $_SERVER['REMOTE_ADDR'];
		$log->tarih_saat = date("Y-m-d H:i:s");
		$log->yapilan_islem = "Sisteme giriş yapıldı."; 
		$log->save();
	}


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

		    self::log_ekle();

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

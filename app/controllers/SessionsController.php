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

	$auth = User::where('email', '=', Input::get('email'))->where('password', '=', Input::get('password'))->first();
    
 

    if($auth){
      Auth::login($auth);
      return Redirect::to('/password.remind');
    }else{
      return Redirect::to('/');
    }



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
		Auth::logout();
		return Redirect::home();
	}


}

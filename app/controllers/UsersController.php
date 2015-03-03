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
		Sentry::register(array(
			'first_name'    => Input::get('adi'),
			'last_name'    => Input::get('soyadi'),
			'email'    => Input::get('email'),
		    'password' => Input::get('password'),
		    'activated' => true
		));

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
	  // store
        $user = User::find($id);
        $user->first_name = Input::get('first_name');
        $user->last_name  = Input::get('last_name');
        $user->username = Input::get('username');
		$user->display_name = Input::get('display_name');
        $user->email = Input::get('email');
        $user->website = Input::get('website');
        $user->save();

        //return redirect('home');
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


}

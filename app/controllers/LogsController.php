<?php

use Carbon\Carbon;


class LogsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Logs::all();
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
	
		//aktif kullanıcıyı al
		$user = DB::table('users')
        ->join('users_groups', function($join)
        {
        
        	if( Sentry::getUser() != null ){
        		$current_user_id = Sentry::getUser()->id;	
        	}else{
        		$current_user_id = Input::get('user_id'); 
        	}
        	  
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
		$log->yapilan_islem = Input::get('process'); 
		$log->save();
 
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
	public function destroy($id)
	{
		//
	}


}

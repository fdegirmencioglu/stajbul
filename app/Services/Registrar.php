<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		//dd($data);

		return Validator::make($data, [
			'adi' => 'required|max:255',
			'email' => 'required|email|max:255|unique:kullanici', //users
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		//dd($data);

		return User::create([
			'adi' => $data['adi'],
			'soyadi' => $data['soyadi'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'tbl_tnm_rol_id' => $data['tbl_tnm_rol_id']
		]);
	}

}

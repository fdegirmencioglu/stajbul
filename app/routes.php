<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('/', function()
{
	if ( ! Sentry::check())
	{	
		// User is not logged in, or is not activated
		return View::make('login.index');
	}
	else
	{
		// User is logged in
		return View::make('home');
	}
	
    
});

Route::get('/home', function()
{
	if ( ! Sentry::check())
	{	
		// User is not logged in, or is not activated
		return View::make('login.index');
	}
	else
	{
		// User is logged in
		return View::make('home');
	}
});

Route::get('/login/register', function()
{
    return View::make('login.register');
});

//Yönetici Profili
Route::get('/admin/profile', function()
{
	if ( ! Sentry::check()) //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
 	{
		return View::make('login.index');
	}else{             //Kullanıcı sisteme giriş yaptıysa -> home'a gits
		return View::make('admin.profile');
	}  
});
 
//Yeni Yönetici Ekle
Route::get('/admin/new', function()
{
	if ( ! Sentry::check())//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
 	{
		return View::make('login.index');
	}else{              //Kullanıcı sisteme giriş yaptıysa -> home'a git
		return View::make('admin.new');
	}  
});


//Route::resource('testtablosu', 'TestDenemelikController');
//Route::get('Captcha.captcha', ['uses'=>'CaptchaController@captcha']);

Route::resource('sessions', 'SessionsController');
//Route::controller('password', 'RemindersController');
Route::resource('users', 'UsersController');

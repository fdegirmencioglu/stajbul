<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/', function()
{  
	if (Auth::check()) //Kullanıcı sisteme giriş yaptıysa -> home'a git
 	{
		return View::make('admin.profile');
	}else{             //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git
		return View::make('auth.login');
	} 

});

Route::get('home', 'HomeController@index');
 
//Yönetici Profili
Route::get('/admin/profile', function()
{
	if (Auth::check()) //Kullanıcı sisteme giriş yaptıysa -> home'a git
 	{
		return View::make('admin.profile');
	}else{             //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git
		return View::make('auth.login');
	}  
});
 
//Yeni Yönetici Ekle
Route::get('/admin/new', function()
{
	if (Auth::check()) //Kullanıcı sisteme giriş yaptıysa -> home'a git
 	{
		return View::make('admin.new');
	}else{             //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git
		return View::make('auth.login');
	}  
});

/*Route::get('user/{name}', function($name)
{
    //
})
->where('name', '[A-Za-z]+');
*/
Route::get('/user/{username}', array(
    'as' => 'profile-user',
    'uses' => 'UserController@find_user'
));

//Route::get('users/email/{email}', 'UserController@find_user');

Route::resource('users', 'UserController');
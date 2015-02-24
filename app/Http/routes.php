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

//Route::get('/', 'LoginController@index');

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

 
Route::get('/admin/profile', function()
{
	if (Auth::check()) //Kullanıcı sisteme giriş yaptıysa -> home'a git
 	{
		return View::make('admin.profile');
	}else{             //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git
		return View::make('auth.login');
	}  
});

//Route::any('/', array('as' => 'home', 'uses' => 'LoginController@index'));

Route::resource('users', 'UserController');






/*App::missing(function($exception)
{
    return File::get(public_path() . '/templates/main.html');
});*/


/*Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::get('/',['as' => 'home', function()
{
    return View::make('login.index');
}]);

Route::resource('testtablosu', 'TestDenemelikController');
Route::get('Captcha.captcha', ['uses'=>'CaptchaController@captcha']);

Route::resource('sessions', 'SessionsController');

Route::controller('password', 'RemindersController');*/

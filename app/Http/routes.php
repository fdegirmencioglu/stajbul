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

Route::get('/', function()
{
   return View::make('auth.login');
});

Route::get('/admin/profile', function()
{
   return View::make('admin.profile');
});

//Route::any('/', array('as' => 'home', 'uses' => 'LoginController@index'));


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


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

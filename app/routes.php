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
    return View::make('login.index');
});

Route::get('/home', function()
{
    return View::make('home');
});

Route::get('/login/register', function()
{
    return View::make('login.register');
});

//Route::resource('testtablosu', 'TestDenemelikController');
//Route::get('Captcha.captcha', ['uses'=>'CaptchaController@captcha']);

Route::resource('sessions', 'SessionsController');
//Route::controller('password', 'RemindersController');
Route::resource('users', 'UsersController');

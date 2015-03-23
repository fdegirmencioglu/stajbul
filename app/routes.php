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
//Route::get('logout', 'SessionsController@destroy');

Route::get('/logout', array(
    'as' => 'account-signout',
    'uses' => 'SessionsController@destroy'
));

Route::get('/', function() {
    if (!Sentry::check()) {
        // User is not logged in, or is not activated
        return View::make('login.index');
    } else {
        // User is logged in
        return View::make('home');
    }
});

Route::get('/home', function() {
    if (!Sentry::check()) {
        // User is not logged in, or is not activated
        return View::make('login.index');
    } else {
        // User is logged in
        return View::make('home');
    }
});

Route::get('/login/register', function() {
    return View::make('login.register');
});
//======== YÖNETİCİ YÖNLENDİRMELERİ ======
//Yönetici Profili
Route::get('/admin/profile', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a gits
        return View::make('admin.profile');
    }
});
//managerId'si belli olan yöneticinin, profil bilgilerinin düzenlenebileceği adres
Route::get('/manager/profile/{managerId}', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a gits
        return View::make('admin.profile');
    }
});



//Yeni Yönetici Ekle
Route::get('/admin/new', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('admin.new');
    }
});


//Yönetici Listele
Route::get('/admin/log_list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('admin.log_list');
    }
});

//Yönetici Listele
/*Route::get('/admin/log/list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('admin.list');
    }
});*/



//Yönetici Listele
Route::get('/admin/confirmation/', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('admin.confirmation');
    }
});

Route::get('/admin/unapproved_user_list', 'UsersController@get_unapproved_user_list');

//Route::resource('testtablosu', 'TestDenemelikController');
//Route::get('Captcha.captcha', ['uses'=>'CaptchaController@captcha']);

Route::resource('sessions', 'SessionsController');
//Route::controller('password', 'RemindersController');
Route::resource('users', 'UsersController');

Route::post('/admin/profile', 'UsersController@photo');
Route::get('get_current_user_photo', 'UsersController@get_photo');
//Bütün yöneticileri getir
Route::get('managers', 'UsersController@get_managers');

/* Route::post('upload/url/{id}', [
  'as' => 'photo', 'uses' => 'UsersController@photo'
  ]); */



//======== FİRMA YÖNLENDİRMELERİ ======
//Firma Profili
Route::get('/company/profile', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a gits
        return View::make('admin.profile');
    }
});


Route::post('/company/profile', 'CompanyController@photo');
Route::post('/company', 'CompanyController@store');

//======== ŞEHİR YÖNLENDİRMELERİ ======
//Bütün Şehirleri Getir
Route::resource('city', 'CityController');

//{city} id'si belli olanı getir
Route::get('city/{city}', 'CityController@showCompanyCity');
Route::resource('company', 'CompanyController');

//======== LOGLAR ======
Route::resource('logs', 'LogsController');
/*Route::post('logs', array('uses' => 'LogsController@store'));
Route::get('logs', array('uses' => 'LogsController@index'));
*/





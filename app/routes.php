<?php

//LOGIN Yönlendirmeleri
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
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('admin.profile');
    }
});

//managerId'si belli olan yöneticinin, profil bilgilerinin düzenlenebileceği adres
Route::get('/manager/profile/{managerId}', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('admin.profile');
    }
});


//academicianId'si belli olan Akademisyenin, profil bilgilerinin düzenlenebileceği adres
Route::get('/academician/profile/{academicianId}', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('academician.profile');
    }
});

//studentId'si belli olan Öğrencinin, profil bilgilerinin düzenlenebileceği adres
Route::get('/student/profile/{studentId}', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('student.profile');
    }
});

//companyId'si belli olan firmanın, profil bilgilerinin düzenlenebileceği adres
Route::get('/company/profile/{companyId}', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a git
        return View::make('company.profile');
    }
});

//Yeni Yönetici Ekle
Route::get('/admin/new', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/new adresine git
        return View::make('admin.new');
    }
});

//Yönetici Log Listele
Route::get('/admin/log_list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/log_list adresine git
        return View::make('admin.log_list');
    }
});

//Yönetici Listele
Route::get('/admin/list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/list adresine git
        return View::make('admin.list');
    }
});

//Yönetici Akademisyen Listele
Route::get('/admin/academician_list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/academician_list adresine git
        return View::make('admin.academician_list');
    }
});

//Yönetici Firma Listele
Route::get('/admin/company_list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/company_list adresine git
        return View::make('admin.company_list');
    }
});

//Yönetici Öğrenci Listele
Route::get('/admin/student_list', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/student_list adresine git
        return View::make('admin.student_list');
    }
});

//Yönetici Rol Atama
Route::get('/admin/assign_role', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/assign_role adresine git
        return View::make('admin.assign_role');
    }
});

//Onay Bekleyen Kullanıcı Listesi 
Route::get('/admin/waiting_confirmation/', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/waiting_confirmation adresine git
        return View::make('admin.waiting_confirmation');
    }
});

//Onaylanmış Kullanıcı Listesi 
Route::get('/admin/confirmed/', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa -> admin/confirmed adresine git
        return View::make('admin.confirmed');
    }
});

//Onay Bekleyen Kullanıcı Listesini getir
Route::get('/admin/unapproved_user_list', 'UsersController@get_unapproved_user_list');
//Onaylanmış Kullanıcı Listesini getir
Route::get('/admin/approved_user_list', 'UsersController@get_approved_user_list');


Route::post('/admin/unapprove_user', 'UsersController@onayi_geri_cek');
Route::post('/admin/approve_user', 'UsersController@yeni_kullanici_onayla');

Route::resource('sessions', 'SessionsController');
Route::resource('users', 'UsersController');

Route::post('/admin/profile', 'UsersController@photo');
Route::get('get_current_user_photo', 'UsersController@get_photo');

//Bütün yöneticileri getir
Route::get('userswithroles/{group_id}', 'UsersController@get_userswithroles');

Route::get('groups', 'UsersController@get_groups');

Route::post('/admin/change_role', 'UsersController@change_role');


/* Route::post('upload/url/{id}', [
  'as' => 'photo', 'uses' => 'UsersController@photo'
  ]); */


//======== AKADEMİSYEN YÖNLENDİRMELERİ ======
//Yeni Akademisyen Profili Ekle
Route::get('/academician/new', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> academician/new adresine git
        return View::make('academician.new');
    }
});


//======== ÖĞRENCİ YÖNLENDİRMELERİ ======
//Yeni Öğrenci Profili Ekle 
Route::get('/student/new', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> student/new_list adresine git
        return View::make('student.new');
    }
});


//======== FİRMA YÖNLENDİRMELERİ ======
//Firma Profili
Route::get('/company/profile', function() {
    if (!Sentry::check()) { //Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {             //Kullanıcı sisteme giriş yaptıysa -> home'a gits
        return View::make('admin.profile');
    }
});

//Yeni Firma Ekle
Route::get('/company/new', function() {
    if (!Sentry::check()) {//Kullanıcı sisteme giriş yapmadıysa -> auth/login'e git 
        return View::make('login.index');
    } else {              //Kullanıcı sisteme giriş yaptıysa ->company/new adresine git
        return View::make('company.new');
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





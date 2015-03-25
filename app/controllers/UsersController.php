<?php

class UsersController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return Kullanici::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        if (Input::get('add_manager') == true) {
            Sentry::register(array(
                'first_name' => Input::get('first_name'),
                'last_name' => Input::get('last_name'),
                'username' => Input::get('username'),
                'display_name' => Input::get('display_name'),
                'email' => Input::get('email'),
                'password' => Input::get('password'),
                'website' => Input::get('website'),
                'activated' => true
            ));
            return Redirect::back();
        } else {
            Sentry::register(array(
                'first_name' => Input::get('adi'),
                'last_name' => Input::get('soyadi'),
                'email' => Input::get('email'),
                'password' => Input::get('password'),
                'activated' => true,
                'yonetici_onayi' => false
            ));

            //En son kayıt yapılan kişi ya da firmanın kayıtını veritabanından getir 
            $last_inserted_record = DB::table('users')->where('email', Input::get('email'))->first();

            //Kişi ya da Firma talep edilen rolü de veritabanına ekle 
            //UsersGroups modelinden yeni bir instance yarat, gerekli alanları
            //doldur ve veritabanına kayıt et.
            $user_group = new UsersGroups;
            $user_group->group_id = Input::get('group_id');
            $user_group->user_id = $last_inserted_record->id;
            $user_group->save();
        }
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return $user = User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        if (Input::get('change_password') == true) {
            //sadece password'ü güncelle
            $user = Sentry::getUserProvider()->findById($id);
            $user->password = Input::get('password');
            $user->save();
        } else {
            // store
            $user = User::find($id);
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->username = Input::get('username');
            $user->display_name = Input::get('display_name');
            $user->email = Input::get('email');
            $user->website = Input::get('website');
            $user->save();
        }
        return View::make('admin.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //Kullanıcıyı pasif yap.
        $user = Sentry::getUserProvider()->findById($id);
        $user->activated = false;
        $user->save();

        return Redirect::back();
    }

    public function photo() {
        $image = Input::file('image');
        $destinationPath = 'public/uploads/';
        $filename = $image->getClientOriginalName();
        Input::file('image')->move($destinationPath, $filename);

        $user = DB::table('user_images')->where('user_id', Sentry::getUser()->id)->first();

        if ($user != null)
            DB::table('user_images')->where('user_id', $user->user_id)->delete();

        $user_image = new UserImage;
        $user_image->resim_adi = $filename;
        $user_image->resim_yolu = $destinationPath;
        $user_image->user_id = Sentry::getUser()->id;
        $save_flag = $user_image->save();
        if ($save_flag) {
            return Redirect::back();
        }
    }

    public function get_photo() {
        //Aktif kullanıcıyı bul
        $current_user_id = Sentry::getUser()->id;
        //Aktif kullanıcının resim bilgilerini getir
        return UserImage::where('user_id', '=', $current_user_id)->get();
    }

    public function get_managers() {
        //users tablosuyla users_groups tablosunun birleşiminden, group_id'si 1 olan(yönetici olan)'nın verilerini çek.
        return DB::table('users')
                        ->join('users_groups', function($join) {
                            $join->on('users.id', '=', 'users_groups.user_id')
                            ->where('users_groups.group_id', '=', 1);
                        })
                        ->get();

        //Tüm kullanıcıları al
        //return Kullanici::all();
    }

    //Onaylanmamış Kullanıcı Listesi
    public function get_unapproved_user_list(){
      //Yönetici onayı olmayanları getir.
      return DB::table('users')
              ->where('yonetici_onayi', '=', 0)
              ->get();


              /*$users = DB::table('users')
                    ->orderBy('name', 'desc')
                    ->groupBy('count')
                    ->having('count', '>', 100)
                    ->get();*/

    }

    //Onaylanmış Kullanıcı Listesi
    public function get_approved_user_list(){
      //Yönetici onayı olmayanları getir.
      return DB::table('users')
              ->where('yonetici_onayi', '=', 1)
              ->get();
    }


    //Yeni Kullanıcıyı onayla
    public function yeni_kullanici_onayla(){
        /*$user_id = Input::get('user_id');
        //$user = Sentry::getUserProvider()->findById($user_id);
        $user = DB::table('users')
              ->where('id', '=', $user_id)
              ->get();
        $user->yonetici_onayi = true;
        $user->save();*/
        $user = Sentry::getUserProvider()->findById( Input::get('user_id') );
        $user->yonetici_onayi = true;
        $user->save();


        return Redirect::back();
    }

    //Kullanıcıdan Onayı Geri Çek
    public function onayi_geri_cek(){
        /*$user_id = Input::get('user_id');
        //$user = Sentry::getUserProvider()->findById($user_id);
        $user = DB::table('users')
              ->where('id', '=', $user_id)
              ->get();

              dd($user);
        $user->yonetici_onayi = false;
        $user->save();*/
        $user = Sentry::getUserProvider()->findById( Input::get('user_id') );
        $user->yonetici_onayi = true;
        $user->save();
        return Redirect::back();
    }

    

}

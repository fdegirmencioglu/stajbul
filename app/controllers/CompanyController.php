<?php

class CompanyController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return Company::all();
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

        dd(Input::get('user_id'));

        $data = file_get_contents("php://input");

        $objData = json_decode($data);

        $veriler = DB::table('company_meta')->get();

        foreach ($veriler as $v) {
            if ($v->user_id == $objData->user_id) {
                DB::table('company_meta')
                        ->where('user_id', $objData->user_id)
                        ->update(array('yetkili_adi' => $objData->yetkili_adi,
                            'yetkili_pozisyonu' => $objData->yetkili_pozisyonu,
                            'kurulus_yili' => $objData->kurulus_yili,
                            'calisan_sayisi' => $objData->calisan_sayisi,
                            'firma_adi' => $objData->firma_adi,
                            'firma_bilgileri' => $objData->firma_bilgileri,
                            'sehir' => $objData->sehir,
                            'ilce' => $objData->ilce,
                            'telefon' => $objData->telefon,
                            'fax' => $objData->fax,
                            'adress' => $objData->adress));
            } else {
                $id = DB::table('company_meta')->insertGetId(
                        array('user_id' => $objData->user_id,
                            'yetkili_adi' => $objData->yetkili_adi,
                            'yetkili_pozisyonu' => $objData->yetkili_pozisyonu,
                            'kurulus_yili' => $objData->kurulus_yili,
                            'calisan_sayisi' => $objData->calisan_sayisi,
                            'firma_adi' => $objData->firma_adi,
                            'firma_bilgileri' => $objData->firma_bilgileri,
                            'sehir' => $objData->sehir,
                            'ilce' => $objData->ilce,
                            'telefon' => $objData->telefon,
                            'fax' => $objData->fax,
                            'adress' => $objData->adress));
            }
        }

        //return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {

        return DB::table('users')
                        ->join('company_meta', 'users.id', '=', 'company_meta.user_id')
                        ->where('company_meta.id', '=', $id)
                        //->toSql();
                        ->get();
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
        return View::make('company.profile');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}

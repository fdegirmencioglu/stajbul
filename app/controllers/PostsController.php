<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		return Posts::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
        //aktif kullanıcıyı al
        /*$user = DB::table('users')
                ->join('users_groups', function($join) {

                    if (Sentry::getUser() != null) {
                        $current_user_id = Sentry::getUser()->id;
                    } else {
                        $current_user_id = Input::get('user_id');
                    }

                    $join->on('users.id', '=', 'users_groups.user_id')
                    ->where('users_groups.user_id', '=', $current_user_id);
                })
                ->get();*/

        /*options.baslik = "";
        options.icerik  = "";
        options.tipi  = "";
        options.gonderen_user_id  = "";
        options.alici_user_id  = "";
        options.alici_group_id  = "";*/

        $post = new Posts;
        $post->baslik = Input::get('baslik');
        $post->icerik = Input::get('icerik');
        $post->tipi = Input::get('tipi'); //mesaj ya da bildiri
        $post->gonderen_user_id = Input::get('gonderen_user_id');;
        $post->alici_user_id = Input::get('alici_user_id');
        $post->alici_group_id = Input::get('alici_group_id');
        $post->save();
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        //aktif kullanıcıyı al
        $user = DB::table('users')
                ->join('users_groups', function($join) {

                    if (Sentry::getUser() != null) {
                        $current_user_id = Sentry::getUser()->id;
                    } else {
                        $current_user_id = Input::get('user_id');
                    }

                    $join->on('users.id', '=', 'users_groups.user_id')
                    ->where('users_groups.user_id', '=', $current_user_id);
                })
                ->get();

        // store
        $post = Posts::find($id);

        $post->baslik = Input::get('baslik');
        $post->icerik = Input::get('icerik');
        $post->tipi = Input::get('gonderi_tipi'); //mesaj ya da bildiri
        $post->gonderen_user_id = $user[0]->user_id;
        $post->alici_user_id = Input::get('alici_user_id');
        $post->save();
        
        return View::make('post.lists');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        //Kullanıcıyı pasif yap.
        $post = Posts::find($id);
        $post->silindi = true;
        $post->save();

        return Redirect::back();
	}


    public function get_user($id) {
        return $user = User::find($id);
    }

	//Kişinin ait olduğu grubun bildirilerini getir
	public function get_usersposts($type){
		
		//aktif kullanıcıyı al
        $user = DB::table('users')
                ->join('users_groups', function($join) {

                    if (Sentry::getUser() != null) {
                        $current_user_id = Sentry::getUser()->id;
                    } else {
                        $current_user_id = Input::get('user_id');
                    }

                    $join->on('users.id', '=', 'users_groups.user_id')
                    ->where('users_groups.user_id', '=', $current_user_id);
                })
                ->get();


		if($type == "messages"){
			//Kişinin mesajlarını getir
			//$user[0]->user_id;
			return $user_posts = Posts::where('alici_user_id', '=', $user[0]->user_id )->get();
		}else{
			//ait olduğu grubun bildirilerini getir
			//kullanıcının grubunu bul
			//dd($user[0]->group_id);
			return $user_posts = Posts::where('alici_group_id', '=', $user[0]->group_id )->get();
		}
		
		
	}

	public function get_who_posted($user_id){
		return User::find($user_id)->pluck('email');
	}


	public function get_unread_notifications(){

		//kullanıcının bağlı olduğu grubu bul
		//aktif kullanıcıyı al
        $user = DB::table('users')
                ->join('users_groups', function($join) {

                    if (Sentry::getUser() != null) {
                        $current_user_id = Sentry::getUser()->id;
                    } else {
                        $current_user_id = Input::get('user_id');
                    }

                    $join->on('users.id', '=', 'users_groups.user_id')
                    ->where('users_groups.user_id', '=', $current_user_id);
                })
                ->get();

        $user_unread_notifications_count = Posts::where('alici_group_id', '=', $user[0]->group_id )
        					->where('okundu', '=', 0)
        					->get()
        					->count();
		return $user_unread_notifications_count;
	}


	public function get_unread_messages(){

		$current_user_id = Sentry::getUser()->id;
        $user = User::find($current_user_id)->get();
        $user_unread_messages_count = Posts::where('alici_user_id', '=', $user[0]->user_id )
        					->where('okundu', '=', 0)
        					->get()
        					->count();

		return $user_unread_messages_count;
	}



	public function change_posts_status(){

            $post = Posts::find( Input::get('id') );
            $post->okundu = Input::get('okundu');
            $post->save();

		return Redirect::to('/');
	}



	


}
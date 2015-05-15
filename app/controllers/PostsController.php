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

        $post = new Posts;
        $post->baslik = Input::get('baslik');
        $post->icerik = Input::get('icerik');
        $post->tipi = Input::get('gonderi_tipi'); //mesaj ya da bildiri
        $post->gonderen_user_id = $user[0]->user_id;
        $post->alici_user_id = Input::get('alici_user_id');
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

}
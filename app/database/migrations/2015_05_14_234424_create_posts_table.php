<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
 			$table->string('baslik');
 			$table->string('icerik');
 			$table->integer('tipi')->default(0); //0=>mesaj, 1=>bildiri
 			$table->integer('gonderen_user_id')->references('id')->on('users');
 			$table->integer('alici_user_id')->references('id')->on('users'); 
 			$table->boolean('okundu')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}

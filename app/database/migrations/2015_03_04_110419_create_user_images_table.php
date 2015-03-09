<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{ 
		Schema::table('user_images', function(Blueprint $table)
		{
			$table->increments('id'); 
			$table->integer('user_id')->references('id')->on('users')->onDelete('cascade'); 
			$table->string('resim_adi');
 			$table->string('resim_yolu'); 
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
		//
	}

}

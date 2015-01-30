<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKullaniciTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kullanici', function(Blueprint $table)
		{
			$table->increments('id');
 			$table->string('adi');
 			$table->string('soyadi');
 			$table->string('kullanici_adi');
 			$table->string('sifre');
 			$table->string('eposta')->unique();
 			$table->string('website');
 			$table->text('aktivasyon_anahtari');
			$table->integer('tbl_tnm_rol_id');
 			$table->string('gorunen_isim');
 			$table->string('resim_yolu');
 			$table->boolean('sil');
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
		Schema::drop('kullanici');
	}

}

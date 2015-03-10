<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyMetaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('company_meta', function($table) {
            $table->increments('id');
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('yetkili_adi');
            $table->string('yetkili_pozisyonu');
            $table->string('kurulus_yili');
            $table->integer('calisan_sayisi');
            $table->string('firma_adi');
            $table->string('firma_bilgileri');
            $table->string('sehir')->references('id')->on('city')->onDelete('cascade');
            $table->string('ilce');
            $table->string('telefon');
            $table->string('fax');
            $table->string('adress');
            $table->boolean('sil')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}

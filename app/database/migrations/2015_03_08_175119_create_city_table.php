<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('city', function($table) {
            $table->increments('id');
            $table->string('sehir_adi');
            $table->tinyInteger('plaka_no');
            $table->integer('telefon_kodu');
            $table->integer('row_number');
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

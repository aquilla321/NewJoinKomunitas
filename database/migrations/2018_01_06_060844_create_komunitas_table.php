<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomunitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('komunitas_name');
            $table->integer('kategori_id');
            $table->text('description');
            $table->string('location');
            $table->integer('member');
            $table->integer('slot');
            $table->string('image_path');
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
        Schema::drop('komunitas');
    }
}

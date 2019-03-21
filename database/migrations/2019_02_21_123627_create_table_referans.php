<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReferans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referanslar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('referans_adi');
            $table->string('referans_gorseli');
            $table->text('referans_aciklama');
            $table->string('firma_adi');
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
        Schema::dropIfExists('referanslar');
    }
}

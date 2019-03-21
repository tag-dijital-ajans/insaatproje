<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_baslik');
            $table->string('ozel_url')->nullable();
            $table->integer('menu_ust_id')->nullable();
            $table->integer('sayfa_id')->nullable();
            $table->integer('sira_no')->nullable();
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
        Schema::dropIfExists('menuler');
    }
}

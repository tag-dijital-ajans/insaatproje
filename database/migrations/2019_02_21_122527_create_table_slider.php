<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliderlar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('metin1');
            $table->string('metin2');
            $table->string('slider_resmi');
            $table->string('buton_metni');
            $table->string('buton_linki');
            $table->integer('sira_no');


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
        Schema::dropIfExists('sliderlar');
    }
}

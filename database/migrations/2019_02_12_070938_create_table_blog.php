<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_adi');
            $table->integer('blog_ust_id')->nullable();
            $table->string('blog_aciklamasi');
            $table->string('yazi_baslik');
            $table->string('yazi_icerik');
            $table->string('yazi_kategorisi');
            $table->string('yazi_one_cikan_foto');
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
        Schema::dropIfExists('blog');
    }
}

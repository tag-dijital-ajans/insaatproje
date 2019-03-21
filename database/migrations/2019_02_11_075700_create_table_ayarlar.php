<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAyarlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayarlar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_adi');
            $table->string('firma_adres')->nullable();
            $table->integer('telefon')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('tag_manager_kod')->nullable();
            $table->string('tag_manager_script')->nullable();
            $table->string('email_smtp_sunucu')->nullable();
            $table->string('smtp_port')->nullable();
            $table->string('email_kullanici')->nullable();
            $table->string('şifre')->nullable();
            $table->string('footer_yazisi')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('ayarlar');
    }
}

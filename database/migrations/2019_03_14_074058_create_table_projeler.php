<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjeler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proje_adi');
            $table->string('proje_aciklama',555);
            $table->integer('proje_kategori_id');//proje kategorisi ile bağlantılı olacak
            $table->string('proje_resimler');
            $table->string('proje_lokasyon');
            $table->string('proje_tipi');
            $table->string('proje_musteri');
            $table->date('proje_tarihi');
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
        Schema::dropIfExists('projeler');
    }
}

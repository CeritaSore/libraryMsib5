<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengarangbuku', function (Blueprint $table) {
            $table->unsignedBigInteger('pengarang_idpengarang')->unsigned();
            $table->unsignedBigInteger('buku_idbuku')->unsigned();
            $table->timestamps();
            $table->foreign('pengarang_idpengarang')->references('idpengarang')->on('pengarang');
            $table->foreign('buku_idbuku')->references('idbuku')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengarangbuku');
    }
};

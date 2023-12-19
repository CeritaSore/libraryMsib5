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
        Schema::create('meminjam', function (Blueprint $table) {
            $table->bigIncrements('idpeminjaman');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('buku_id');
            $table->date('tanggal_pengambilan');
            $table->date('tanggal_pengembalian');
            $table->timestamps();
            $table->foreign('buku_id')->references('idbuku')->on('buku')->onDelete('cascade');
            $table->foreign('user_id')->references('iduser')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meminjam');
    }
};

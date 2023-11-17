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
            $table->date('tanggal_pengambilan');
            $table->date('tanggal_pengembalian');
            $table->unsignedBigInteger('salinanbuku_id');
            $table->timestamps();
            $table->foreign('salinanbuku_id')->references('idsalinanbuku')->on('salinanbuku')->onDelete('cascade');
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

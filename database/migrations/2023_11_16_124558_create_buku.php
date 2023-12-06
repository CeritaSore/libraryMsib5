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
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('idbuku');
            $table->string('judulbuku',45);
            $table->unsignedBigInteger('pengarang_idpengarang');
            $table->unsignedBigInteger('penerbit_idpenerbit');
            $table->unsignedBigInteger('kategori_idkategori');
            $table->string('foto',255)->nullable();
            $table->string('deskripsi',100)->nullable();
            $table->enum('status',['Tersedia','sedang dipinjam'])->default('Tersedia');
            $table->timestamps();
            $table->foreign('kategori_idkategori')->references('idkategori')->on('kategori')->onDelete('cascade');
            $table->foreign('pengarang_idpengarang')->references('idpengarang')->on('pengarang')->onDelete('cascade');
            $table->foreign('penerbit_idpenerbit')->references('idpenerbit')->on('penerbit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};

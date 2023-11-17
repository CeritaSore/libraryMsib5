<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salinanbuku', function (Blueprint $table) {
            $table->bigIncrements('idsalinanbuku');
            $table->string('tahunterbit',45);
            $table->unsignedBigInteger('buku_idbuku')->unsigned();
            $table->unsignedBigInteger('penerbit_idpenerbit')->unsigned();
            // $table->unsignedBigInteger('penerbit_id');
            $table->timestamps();


            $table->foreign('buku_idbuku')->references('idbuku')->on('buku')->onDelete('cascade');
            $table->foreign('penerbit_idpenerbit')->references('idpenerbit')->on('penerbit');
            // $table->foreign('penerbit_id')->references('idpenerbit')->on('penerbit')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salinanbuku');
    }
};

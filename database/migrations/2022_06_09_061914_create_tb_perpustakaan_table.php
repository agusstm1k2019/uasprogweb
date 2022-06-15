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
        Schema::create('tb_perpustakaan', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul_buku');
            $table->string('penerbit_buku');
            $table->string('tahun_buku');
            $table->string('jenis_buku');
            $table->string('lokasi_buku');
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
        Schema::dropIfExists('tb_perpustakaan');
    }
};

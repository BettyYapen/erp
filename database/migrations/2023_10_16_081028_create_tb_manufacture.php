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
        Schema::create('tb_manufacture', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('kode_produk', 7);
            $table->string('nama_produk', 20);
            // $table->foreignId('id_bahan')->references('id_bahan')->on('tb_inventory');
            $table->string('jumlah', 30);
            $table->string('harga_jual',50);
            $table->string('biaya_produksi',50);
            $table->string('gambar', 255);
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
        Schema::dropIfExists('tb_manufacture');
    }
};

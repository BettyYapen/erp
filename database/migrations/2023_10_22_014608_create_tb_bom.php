<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_bom', function (Blueprint $table) {
            $table->bigIncrements('kode_bom');
            $table->foreignId('id_produk')->references('id_produk')->on('tb_manufacture');
            $table->foreignId('id_bahan')->references('id_bahan')->on('tb_inventory');
            $table->string('jumlah', 50);
            $table->string('harga', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_bom');
    }
};


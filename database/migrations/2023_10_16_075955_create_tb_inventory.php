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
        Schema::create('tb_inventory', function (Blueprint $table) {
            $table->bigIncrements('id_bahan');
            $table->string('kode_bahan', 7);
            $table->string('nama_bahan', 30);
            $table->string('jumlah', 50);
            $table->string('harga', 50);
            $table->string('perusahaan', 50);
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
        Schema::dropIfExists('tb_inventory');
    }
};

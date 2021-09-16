<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('master_barang_id');
            $table->date('tgl');
            // $table->integer('harga_beli');
            // $table->integer('harga_jual');
            $table->string('jumlah');
            // $table->string('satuan');
            $table->integer('untung_per1')->default(0);
            $table->integer('untung_tot')->default(0);
            $table->integer('kredit')->default(0);
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
        Schema::dropIfExists('pembelian');
    }
}

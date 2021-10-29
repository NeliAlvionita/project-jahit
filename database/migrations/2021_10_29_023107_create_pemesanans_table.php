<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->bigIncrements("id_pemesanan");
            $table->unsignedBigInteger("id_pelanggan");
            $table->date("tanggal_pemesanan");
            $table->integer("total_pemesanan");
            $table->string("alamat_pemesanan");
            $table->string("status_pemesanan");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail__transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nomortransaksi');
            $table->unsignedBigInteger('kodebarang');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('nomortransaksi')->references('id')->on('transaksis');
            $table->foreign('kodebarang')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__transaksis');
    }
};

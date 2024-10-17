<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */public function up(): void
    {
        Schema::create('absenbadminton', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id'); 
            $table->string('nama_pemain');
            $table->date('tanggal_pertandingan');
            $table->time('waktu_absen');
            $table->string('status_kehadiran');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absenbadminton');
    }
};
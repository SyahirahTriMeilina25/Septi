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
        Schema::create('pengalamans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('alumni_id');
            $table->foreign('alumni_id')->references('id')->on('alumni')->onDelete('cascade');
    
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->string('lokasi_perusahaan');
            $table->text('deskripsi_perusahaan')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->text('portfolio_prestasi'); 
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalamans');
    }
};

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
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('alumni_id');
            $table->foreign('alumni_id')->references('id')->on('alumni')->onDelete('cascade');

            $table->string('nama_pendidikan');
            $table->string('lokasi_pendidikan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->string('tingkat_pendidikan');
            $table->text('deskripsi')->nullable();
            $table->decimal('ipk', 3, 2)->nullable(); 
            $table->text('aktifitas_dan_pencapaian')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikans');
    }
};

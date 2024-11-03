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
        Schema::create('kilasbaras', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->date('tgl_publish')->nullable();
            $table->string('dirjen')->nullable();
            $table->text('deskripsi')->nullable(); 
            $table->string('kementrian')->nullable();
            $table->string('gambar')->nullable(); 
            $table->text('referensi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kilasbaras');
    }
};

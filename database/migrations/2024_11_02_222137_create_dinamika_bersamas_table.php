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
        Schema::create('dinamika_bersamas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('poster')->nullable(); // Kolom untuk menyimpan path media poster
            $table->string('pelaksana');
            $table->enum('peruntukan', ['Umum', 'Mahasiswa UGM', 'Staff BEM']);
            $table->text('deskripsi')->nullable(); // richtext dalam JSON biasanya disimpan sebagai text
            $table->date('tgl_buka')->nullable();
            $table->date('tgl_tutup')->nullable();
            $table->string('buku_panduan')->nullable();
            $table->string('link_pendaftaran')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dinamika_bersamas');
    }
};

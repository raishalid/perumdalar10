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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('kategori_berita_id');
            $table->foreign('kategori_berita_id')->references('id')->on('kategori_beritas')->onDelete('cascade');
            $table->timestamp('tanggal_terbit');
            $table->text('excerpts');
            $table->string('slug');
            $table->string('author');
            $table->text('isi_berita');
            $table->text('gbr_berita');
            $table->boolean('headline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};

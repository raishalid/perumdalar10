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
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('anak_perusahaan');
            $table->text('description');
            $table->text('html_content')->nullable();
            $table->timestamps();
            $table->foreign('sector_category_id')->references('id')->on('sector_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sectors', function (Blueprint $table) {
            $table->dropForeign(['sector_category_id']);
        });
        Schema::dropIfExists('sectors');
    }
    // {
    //     Schema::dropIfExists('products');
    // }
};

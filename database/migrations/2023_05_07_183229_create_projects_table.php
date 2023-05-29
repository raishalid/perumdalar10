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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('project_provider_id')->constrained()->onDelete('cascade');
            $table->foreignId('project_status_id')->constrained()->onDelete('cascade');
            $table->foreignId('funding_source_id')->constrained()->onDelete('cascade');
            $table->string('project_name')->default('');
            $table->text('project_description')->nullable();
            $table->decimal('project_budget', 20, 2);
            $table->text('project_target')->nullable();
            $table->timestamp('project_start');
            $table->string('project_duration')->nullable();
            $table->text('project_html')->nullable();
            $table->string('project_headgbr')->default('');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

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
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('strem_id')->references('id')->on('strems')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('substrem_id')->references('id')->on('substrems')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('specialization_name');
            $table->string('specialization_slug');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('created_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specializations');
    }
};

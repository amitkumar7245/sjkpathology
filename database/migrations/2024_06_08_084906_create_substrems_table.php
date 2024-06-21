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
        Schema::create('substrems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('strem_id')->references('id')->on('strems')->onUpdate('cascade')->onDelete('cascade');
            $table->string('substrem_name');
            $table->string('substrem_slug');
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
        Schema::dropIfExists('substrems');
    }
};

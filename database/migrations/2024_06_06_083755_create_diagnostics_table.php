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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diauser_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('locationname')->nullable();
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
        Schema::dropIfExists('diagnostics');
    }
};

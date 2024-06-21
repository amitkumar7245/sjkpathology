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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinicuser_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->nullable()->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->nullable()->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('clinic_name')->nullable();
            $table->string('clinicowner_name')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('telephonephone_number')->nullable();
            $table->string('clinic_email')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('clinic_address');
            $table->string('clinic_review')->nullable();
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
        Schema::dropIfExists('clinics');
    }
};

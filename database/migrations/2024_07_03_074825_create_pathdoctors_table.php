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
        Schema::create('pathdoctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctoruser_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->nullable()->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->nullable()->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->nullable()->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->string('locationname')->nullable();
            $table->string('specialization')->nullable();
            $table->string('commission');
            $table->string('registration_number')->nullable();
            $table->string('license_number')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('doctor_sign')->nullable();
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
        Schema::dropIfExists('pathdoctors');
    }
};

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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospitaluser_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->nullable()->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->nullable()->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->nullable()->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('zonename_id')->nullable()->references('id')->on('zones')->onUpdate('cascade')->onDelete('cascade');
            $table->string('diagnostic_id')->nullable();
            $table->string('locationname')->nullable();
            $table->string('specialization')->nullable();
            $table->string('specialtest')->nullable();
            $table->string('routetest')->nullable();
            $table->string('diagnosspecialtest')->nullable();
            $table->string('diagnosroutetest')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('license_number')->nullable();
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
        Schema::dropIfExists('hospitals');
    }
};

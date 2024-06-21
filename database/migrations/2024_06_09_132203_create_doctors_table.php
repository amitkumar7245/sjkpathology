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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctoruser_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('strem_id')->nullable()->references('id')->on('strems')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('substrem_id')->nullable()->references('id')->on('substrems')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('course_id')->nullable()->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('specialization_id')->nullable()->references('id')->on('specializations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bankname_id')->nullable()->references('id')->on('banks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('employeetype_id')->nullable()->references('id')->on('employee_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('designation_id')->nullable()->references('id')->on('designations')->onUpdate('cascade')->onDelete('cascade');
            $table->string('locationname')->nullable();
            $table->string('branchname')->nullable();
            $table->string('ifsccode')->nullable();
            $table->string('accountnumber')->nullable();
            $table->string('accountholdername')->nullable();
            $table->string('commission')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('license_number')->nullable();
            $table->string('doctor_sign')->nullable();
            $table->string('services')->nullable();
            $table->string('collage_name')->nullable();
            $table->string('year_of_completion')->nullable();
            $table->string('degree')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('experience_from')->nullable();
            $table->string('experience_to')->nullable();
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
        Schema::dropIfExists('doctors');
    }
};

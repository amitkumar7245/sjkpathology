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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number');
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('phone');
            $table->text('address')->nullable();
            $table->date('dob')->nullable();
            $table->date('doj')->nullable();
            $table->string('aadharnumber')->nullable();
            $table->enum('role',['admin','doctor','patient','diagnostic','collection','staff','hospital'])->default('staff');
            $table->enum('status',['active','inactive'])->default('active');
            $table->enum('is_delete',['not delete','delete'])->default('not delete');
            $table->string('created_by');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

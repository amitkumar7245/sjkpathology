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
        Schema::create('testblood_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('testblood_id')->references('id')->on('test_bloods')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sampletype_id')->references('id')->on('sample_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('testbloodgroup_name')->nullable();
            $table->string('testbloodgroup_code')->nullable();
            $table->string('testbloodgroup_slug')->nullable();
            $table->string('testbloodgroup_price')->nullable();
            $table->text('testbloodgroup_precautions')->nullable();
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
        Schema::dropIfExists('testblood_groups');
    }
};

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
        Schema::table('pathdoctors', function (Blueprint $table) {
            $table->string('specialtest')->nullable()->after('specialization');
            $table->string('routetest')->nullable()->after('specialtest');
            $table->string('diagnosspecialtest')->nullable()->after('routetest');
            $table->string('diagnosroutetest')->nullable()->after('diagnosspecialtest');
            $table->foreignId('diagnostic_id')->nullable()->constrained('diagnostics')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('zonename_id')->nullable()->constrained('zones')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pathdoctors', function (Blueprint $table) {
            $table->dropForeign(['diagnostic_id']);
            $table->dropForeign(['zonename_id']);
            $table->dropColumn(['specialtest', 'routetest', 'diagnosspecialtest', 'diagnosroutetest', 'diagnostic_id', 'zonename_id']);
        });
    }
};

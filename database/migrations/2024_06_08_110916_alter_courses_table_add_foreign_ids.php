<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCoursesTableAddForeignIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            if (!Schema::hasColumn('courses', 'strem_id')) {
                $table->foreignId('strem_id')->constrained('strems')->onUpdate('cascade')->onDelete('cascade');
            }
            if (!Schema::hasColumn('courses', 'substrem_id')) {
                $table->foreignId('substrem_id')->constrained('substrems')->onUpdate('cascade')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            if (Schema::hasColumn('courses', 'strem_id')) {
                $table->dropForeign(['strem_id']);
                $table->dropColumn('strem_id');
            }
            if (Schema::hasColumn('courses', 'substrem_id')) {
                $table->dropForeign(['substrem_id']);
                $table->dropColumn('substrem_id');
            }
        });
    }
}

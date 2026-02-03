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
         Schema::table('weight_logs', function (Blueprint $table) {
            $table->integer('calories')->nullable()->change();
            $table->time('exercise_time')->nullable()->change();
            $table->text('exercise_content')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('weight_logs', function (Blueprint $table) {
            $table->integer('calories')->nullable(false)->change();
            $table->time('exercise_time')->nullable(false)->change();
            $table->text('exercise_content')->nullable(false)->change();
        });
    }
};

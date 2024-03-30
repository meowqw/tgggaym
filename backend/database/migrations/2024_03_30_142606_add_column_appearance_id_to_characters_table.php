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
        Schema::table('characters', function (Blueprint $table) {
            $table->unsignedBigInteger('appearance_id');
        });

        Schema::table('character_appearances', function (Blueprint $table) {
            $table->dropColumn('character_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn('appearance_id');
        });

        Schema::table('character_appearances', function (Blueprint $table) {
            $table->unsignedBigInteger('character_id');
        });
    }
};

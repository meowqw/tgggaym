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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('balance')->default(0);
            $table->float('experience')->default(0);;
            $table->float('mana')->default(100);;
            $table->float('valor')->default(0);;
            $table->float('hp')->default(100);;
            $table->unsignedBigInteger('hair_id');
            $table->unsignedBigInteger('hair_color_id');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('faction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};

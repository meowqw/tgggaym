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
        $characterAppearance = \Illuminate\Support\Facades\DB::table('admin_menu')
            ->where('title', 'CharacterAppearance')->first();

        \Illuminate\Support\Facades\DB::table('admin_menu')->insert(
            [
                [
                    'title' => 'Preset',
                    'parent_id' => $characterAppearance->id,
                    'order' => 11,
                    'icon' => 'fa-clone',
                    'uri' => 'characters/preset',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $characterAppearance = \Illuminate\Support\Facades\DB::table('admin_menu')
            ->where('uri', 'characters/preset')->delete();
    }
};

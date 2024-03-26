<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $characterAppearanceId = \Illuminate\Support\Facades\DB::table('admin_menu')->insertGetId(
            [
                'title' => 'CharacterAppearance',
                'parent_id' => 0,
                'order' => 8,
                'icon' => 'fa-paint-brush',
                'uri' => '',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null
            ]);

        $usersId = \Illuminate\Support\Facades\DB::table('admin_menu')->insertGetId(
            [
                'title' => 'User',
                'parent_id' => 0,
                'order' => 9,
                'icon' => 'fa-user',
                'uri' => '',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null
            ]);
        $locationId = \Illuminate\Support\Facades\DB::table('admin_menu')->insertGetId(
            [
                'title' => 'Location',
                'parent_id' => 0,
                'order' => 10,
                'icon' => 'fa-tree',
                'uri' => '',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null
            ]);

        \Illuminate\Support\Facades\DB::table('admin_menu')->insert(
            [
                [
                    'title' => 'Characters',
                    'parent_id' => $usersId,
                    'order' => 11,
                    'icon' => 'fa-vcard',
                    'uri' => 'characters',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
                [
                    'title' => 'Factions',
                    'parent_id' => $characterAppearanceId,
                    'order' => 12,
                    'icon' => 'fa-male',
                    'uri' => 'factions',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],

                [
                    'title' => 'HairColors',
                    'parent_id' => $characterAppearanceId,
                    'order' => 13,
                    'icon' => 'fa-adjust',
                    'uri' => 'hair/colors',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
                [
                    'title' => 'Hairs',
                    'parent_id' => $characterAppearanceId,
                    'order' => 14,
                    'icon' => 'fa-puzzle-piece',
                    'uri' => 'hairs',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
                [
                    'title' => 'Genders',
                    'parent_id' => $characterAppearanceId,
                    'order' => 15,
                    'icon' => 'fa-genderless',
                    'uri' => 'genders',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
                [
                    'title' => 'Location',
                    'parent_id' => $locationId,
                    'order' => 16,
                    'icon' => 'fa-map-o',
                    'uri' => 'locations',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
                [
                    'title' => 'LocationObjects',
                    'parent_id' => $locationId,
                    'order' => 17,
                    'icon' => 'fa-object-ungroup',
                    'uri' => 'location/objects',
                    'permission' => null,
                    'created_at' => null,
                    'updated_at' => null
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \Illuminate\Support\Facades\DB::table('admin_menu')
            ->whereIn('uri', [
                'location/objects',
                'locations',
                'genders',
                'hairs',
                'hair/colors',
                'characters',
                'factions',
            ])->delete();
    }
};

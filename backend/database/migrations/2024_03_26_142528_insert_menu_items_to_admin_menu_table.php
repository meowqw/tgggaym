<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $gameInterfaceId = \Illuminate\Support\Facades\DB::table('admin_menu')->insertGetId(
            [
                'title' => 'GameInterface',
                'parent_id' => 0,
                'order' => 18,
                'icon' => 'fa-bars ',
                'uri' => '',
                'permission' => null,
                'created_at' => null,
                'updated_at' => null
            ]);
        \Illuminate\Support\Facades\DB::table('admin_menu')->insert(
            [
                [
                    'title' => 'MenuItems',
                    'parent_id' => $gameInterfaceId,
                    'order' => 19,
                    'icon' => 'fa-ellipsis-h',
                    'uri' => 'game/interface/menu',
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
        \Illuminate\Support\Facades\DB::table('admin_menu')
            ->whereIn('uri', [
                'game/interface/menu',
            ])->delete();
    }
};

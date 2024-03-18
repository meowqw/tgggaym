<?php

namespace App\Admin\Controllers\Faction;

use App\Admin\Controllers\EditController;
use App\Models\Faction\Faction;

class FactionController extends EditController
{
    protected $model = Faction::class;
    protected $title = 'Factions';
}

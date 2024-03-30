<?php

namespace App\Admin\Controllers\Faction;

use App\Admin\Controllers\EditController;
use App\Models\CharacterAppearance\Faction;
use App\Services\Admin\Form\WithAssetFormMaker;

class FactionController extends EditController
{
    protected $model = Faction::class;
    protected $title = 'Factions';
    protected string $formMaker = WithAssetFormMaker::class;
}

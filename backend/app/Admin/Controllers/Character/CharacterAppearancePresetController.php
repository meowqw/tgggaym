<?php

namespace App\Admin\Controllers\Character;

use App\Admin\Controllers\EditController;
use App\Models\CharacterAppearance\CharacterAppearancePreset;
use App\Services\Admin\Form\WithAssetFormMaker;

class CharacterAppearancePresetController extends EditController
{
    protected $model = CharacterAppearancePreset::class;
    protected $title = 'CharacterAppearancePreset';
    protected string $formMaker = WithAssetFormMaker::class;
}

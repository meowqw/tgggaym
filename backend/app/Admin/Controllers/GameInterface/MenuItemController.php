<?php

namespace App\Admin\Controllers\GameInterface;

use App\Admin\Controllers\EditController;
use App\Models\GameInterface\MenuItem;
use App\Services\Admin\Form\WithAssetFormMaker;

class MenuItemController extends EditController
{
    protected $model = MenuItem::class;
    protected $title = 'MenuItems';
    protected string $formMaker = WithAssetFormMaker::class;
}

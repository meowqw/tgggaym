<?php

namespace App\Admin\Controllers\Character;

use App\Admin\Controllers\EditController;
use App\Models\CharacterAppearance\Hair;

class HairController extends EditController
{
    protected $model = Hair::class;
    protected $title = 'Hair';
}

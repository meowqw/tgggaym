<?php

namespace App\Admin\Controllers\Character;

use App\Admin\Controllers\EditController;
use App\Models\CharacterAppearance\Gender;

class GenderController extends EditController
{
    protected $model = Gender::class;
    protected $title = 'Genders';
}

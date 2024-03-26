<?php

namespace App\Admin\Controllers\Character;

use App\Admin\Controllers\EditController;
use App\Models\Character\Character;

class CharacterController extends EditController
{
    protected $model = Character::class;
    protected $title = 'Characters';
}

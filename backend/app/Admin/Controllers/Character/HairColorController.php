<?php

namespace App\Admin\Controllers\Character;

use App\Admin\Controllers\EditController;
use App\Models\Character\HairColor;

class HairColorController extends EditController
{
    protected $model = HairColor::class;
    protected $title = 'HairColors';
}

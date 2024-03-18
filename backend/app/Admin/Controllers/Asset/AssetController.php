<?php

namespace App\Admin\Controllers\Asset;

use App\Admin\Controllers\EditController;
use App\Models\Asset\Asset;
use Encore\Admin\Controllers\AdminController;

class AssetController extends EditController
{
    protected $title = 'Assets';
    protected $model = Asset::class;
}

<?php

namespace App\Admin\Controllers\Location;

use App\Admin\Controllers\EditController;
use App\Models\Location\Location;
use App\Services\Admin\Form\WithAssetFormMaker;

class LocationController extends EditController
{
    protected $model = Location::class;
    protected $title = 'Locations';
    protected string $formMaker = WithAssetFormMaker::class;
}

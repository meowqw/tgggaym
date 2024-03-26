<?php

namespace App\Admin\Controllers\Location;

use App\Admin\Controllers\EditController;
use App\Models\Location\LocationObject;
use App\Services\Admin\Form\WithAssetFormMaker;

class LocationObjectController extends EditController
{
    protected $model = LocationObject::class;
    protected $title = 'LocationObjects';
    protected string $formMaker = WithAssetFormMaker::class;
}

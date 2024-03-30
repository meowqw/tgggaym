<?php

namespace App\Services\Api\GameInterface;

use App\Models\GameInterface\MenuItem;
use Illuminate\Database\Eloquent\Collection;

class MenuItemService
{
    public function getItems(): Collection
    {
        return MenuItem::all();
    }
}

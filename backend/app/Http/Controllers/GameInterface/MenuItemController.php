<?php

namespace App\Http\Controllers\GameInterface;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameInterface\MenuItemResource;
use App\Services\Api\GameInterface\MenuItemService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MenuItemController extends Controller
{
    public function __construct(public MenuItemService $service)
    {
    }

    /**
     * Получить список доступных элементов меню
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return MenuItemResource::collection($this->service->getItems());
    }
}

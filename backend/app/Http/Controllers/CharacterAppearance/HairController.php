<?php

namespace App\Http\Controllers\CharacterAppearance;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hair\HairColorListResource;
use App\Http\Resources\Hair\HairListResource;
use App\Services\Api\CharacterAppearance\HairService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HairController extends Controller
{
    public function __construct(public HairService $service)
    {
    }

    /**
     * Получить доступные типы волос
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return HairListResource::collection($this->service->getHairs());
    }

    /**
     * Получит доступные цвета для волос
     *
     * @return AnonymousResourceCollection
     */
    public function getHairColors(): AnonymousResourceCollection
    {
        return HairColorListResource::collection($this->service->getHairColors());
    }
}

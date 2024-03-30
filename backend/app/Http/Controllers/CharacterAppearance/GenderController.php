<?php

namespace App\Http\Controllers\CharacterAppearance;

use App\Http\Controllers\Controller;
use App\Http\Resources\Gender\GenderListResource;
use App\Services\Api\CharacterAppearance\GenderService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GenderController extends Controller
{
    public function __construct(public GenderService $service)
    {
    }

    /**
     * Получить доступные гендеры
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return GenderListResource::collection($this->service->getGenders());
    }
}

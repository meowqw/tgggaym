<?php

namespace App\Http\Controllers\CharacterAppearance;

use App\Http\Controllers\Controller;
use App\Http\Resources\Faction\FactionListResource;
use App\Services\Api\CharacterAppearance\FactionService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FactionController extends Controller
{
    public function __construct(public FactionService $service)
    {
    }

    /**
     * Получить фракции
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return FactionListResource::collection($this->service->getFactions());
    }
}

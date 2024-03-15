<?php

namespace App\Http\Resources\User;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class GetUserResource extends JsonResource
{
    /** @var $resource User */
    public $resource;

    /**
     * @param $request
     * @return string[]
     */
    public function toArray($request): array
    {
        return [
            'tgId' => $this->resource->getTgId(),
            'tgLogin' => $this->resource->getTgLogin(),
            'lastLogin' => $this->resource->getLastLogin()
        ];
    }

}

<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class GetTokenResource extends JsonResource
{
    /** @var $resource string */
    public $resource;

    /**
     * @param $request
     * @return string[]
     */
    public function toArray($request): array
    {
        return [
            'token' => $this->resource
        ];
    }

}

<?php

namespace App\Http\Resources\Common;

use Illuminate\Http\Resources\Json\JsonResource;

class JustBoolResource extends JsonResource
{
    /** @var $resource bool */
    public $resource;

    /**
     * @param $request
     * @return bool[]
     */
    public function toArray($request): array
    {
        return [
            'result' => $this->resource
        ];
    }

}

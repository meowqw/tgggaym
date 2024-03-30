<?php

namespace App\Exceptions\Api;

use Illuminate\Http\JsonResponse;

class ApiExceptionWithMessage extends \Exception
{
    public function render(): JsonResponse
    {
        return response()->json([
            'error' => $this->getMessage(),
        ], $this->getCode());
    }
}

<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class TelegramAuthMiddleware extends Middleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return JsonResponse|mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->header('User-Agent') !== 'TelegramBot') {
            abort(401);
        }

        return $next($request);
    }
}

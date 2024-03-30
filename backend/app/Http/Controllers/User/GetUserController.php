<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\GetUserResource;
use App\Services\Api\User\UserService;
use Exception;
use Illuminate\Support\Facades\Auth;

class GetUserController extends Controller
{
    /** Получить текущего пользователя
     *
     * @throws Exception
     */
    public function getUser(): GetUserResource
    {
        return new GetUserResource(UserService::getUserById(Auth::id()));
    }
}

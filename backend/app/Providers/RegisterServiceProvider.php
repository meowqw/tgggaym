<?php
namespace App\Providers;

use App\Interfaces\Auth\Register\RegisterStrategyInterface;
use App\Services\Api\Auth\Register\TelegramRegisterService;
use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(RegisterStrategyInterface::class, TelegramRegisterService::class);
    }
}

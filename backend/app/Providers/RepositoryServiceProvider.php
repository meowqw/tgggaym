<?php
namespace App\Providers;

use App\Services\Auth\Register\RegisterStrategy;
use App\Services\Auth\Register\TelegramRegisterService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(RegisterStrategy::class, TelegramRegisterService::class);
    }
}

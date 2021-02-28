<?php

namespace App\Providers;

use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Services\AbstractService;
use App\Services\UserService;
use App\Services\RecordService;
use http\Env\Request;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->when([UserController::class, RegisterController::class])
            ->needs(AbstractService::class)
            ->give(UserService::class);

        $this->app->when([RecordController::class])
            ->needs(AbstractService::class)
            ->give(RecordService::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

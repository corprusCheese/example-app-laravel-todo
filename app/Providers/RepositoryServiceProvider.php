<?php

namespace App\Providers;

use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Repositories\RecordRepository;
use App\Repositories\UserRepository;
use App\Services\AbstractService;
use App\Services\RecordService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->when([UserController::class, RegisterController::class, UserService::class])
            ->needs(BaseRepository::class)
            ->give(UserRepository::class);

        //
        $this->app->when([RecordController::class, RecordService::class])
            ->needs(BaseRepository::class)
            ->give(RecordRepository::class);
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

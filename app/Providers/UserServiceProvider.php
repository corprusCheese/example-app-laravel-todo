<?php

namespace App\Providers;

use App\Http\Controllers\Api\UserController;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->when(UserController::class)
            ->needs(BaseRepository::class)
            ->give(UserRepository::class);

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

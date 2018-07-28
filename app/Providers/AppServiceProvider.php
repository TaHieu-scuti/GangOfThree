<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\ClassServiceInterface;
use App\Services\UserService;
use App\Services\ClassService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );

        $this->app->singleton(
            ClassServiceInterface::class,
            ClassService::class
        );
    }
}

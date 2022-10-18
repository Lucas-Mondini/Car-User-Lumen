<?php

namespace App\Providers;


use App\Repositories\Car\CarRepositoryEloquent;
use App\Repositories\Car\CarRepositoryInterface;
use App\Repositories\User\UserRepositoryEloquent;
use App\Repositories\User\UserRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepositoryEloquent::class);
        $this->app->bind(CarRepositoryInterface::class, CarRepositoryEloquent::class);
    }
}

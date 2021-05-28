<?php

namespace App\Providers;

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
        //laravel02
        $this->app->singleton(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryEloquentRepository::class,

            \App\Repositories\NewsType\NewsTypeRepositoryInterface::class,
            \App\Repositories\NewsType\NewsTypeEloquentRepository::class,

            \App\Repositories\News\NewsRepositoryInterface::class,
            \App\Repositories\News\NewsEloquentRepository::class,

            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserEloquentRepository::class,

            \App\Repositories\Advertisement\AdvertisementRepositoryInterface::class,
            \App\Repositories\Advertisement\AdvertisementEloquentRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

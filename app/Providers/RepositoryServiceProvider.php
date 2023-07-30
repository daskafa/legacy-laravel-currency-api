<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Interfaces\CurrencyRepositoryInterface::class,
            \App\Repositories\CurrencyRepository::class
        );

        $this->app->bind(
            \App\Interfaces\CurrencyValueRepositoryInterface::class,
            \App\Repositories\CurrencyValueRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

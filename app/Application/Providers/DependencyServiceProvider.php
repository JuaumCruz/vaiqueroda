<?php

namespace VaiQueCompra\Application\Providers;

use Illuminate\Support\ServiceProvider;

class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('VaiQueCompra\Domain\Contracts\Repositories\CompanyRepositoryInterface', 'VaiQueCompra\Domain\Repositories\CompanyRepository');
    }
}

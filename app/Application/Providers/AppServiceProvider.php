<?php

namespace VaiQueCompra\Application\Providers;

use Code\Validator\Cnpj;
use Code\Validator\Cpf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            $cpf = new Cpf();
            return $cpf->isValid($value);
        });
        Validator::extend('cnpj', function ($attribute, $value, $parameters, $validator) {
            $cnpj = new Cnpj();
            return $cnpj->isValid($value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $this->app->singleton(\Faker\Generator::class, function() {
               return \Faker\Factory::create(env('FAKER_LANGUAGE'));
            });
        }
    }
}

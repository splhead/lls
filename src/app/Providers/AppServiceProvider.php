<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*Relation::morphMap([
            'clientes' => App\Cliente::class,
            'dependentes' => App\Dependente::class,
        ]);*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

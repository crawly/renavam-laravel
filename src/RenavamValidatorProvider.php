<?php

namespace Crawly\RenavamLaravel;

use Illuminate\Support\ServiceProvider;

class RenavamValidatorProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->extend('renavam', '\\Crawly\\RenavamLaravel\\Validator@validateRenavam', 'O campo :attribute deve ser um renavam válido.');
    }
}

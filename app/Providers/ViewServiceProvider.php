<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\MakeModelForm;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(
            ['academicplans/index'],
            MakeModelForm::class
            );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

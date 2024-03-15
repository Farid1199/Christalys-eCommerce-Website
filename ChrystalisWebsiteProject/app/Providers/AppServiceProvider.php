<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        if ($this->app->environment('local')) { // Only in local environment
            DB::listen(function ($query) {
                Log::info($query->sql, $query->bindings, $query->time);
            });
        }
    }
}

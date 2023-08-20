<?php
/**
 * @author devxnet
 * @date   2023-08-20 09:10:01
 * @file   BoApiLaravelServiceProvider.php
 *
 * Do not modify this code on your own, as it may lead to unexpected outcomes.
 * We do not take responsibility for any issues that may arise from unauthorized changes.
 * For inquiries about modifications, please contact devxnetx@gmail.com.
 */

namespace Devxnetx\BoApiLaravel;

use Illuminate\Support\ServiceProvider;

class BoApiLaravelServiceProvider extends ServiceProvider
{

    public function boot ()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/burziobiavi.php' => config_path('burziobiavi.php'),
            ]);
        }
    }

    public function register ()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/burziobiavi.php', 'burziobiavi');

        // Register the main class to use with the facade
        $this->app->singleton('burziobiavi', function () {
            return new BurziObiavi(config('burziobiavi.username'), config('burziobiavi.password'));
        });
    }
}
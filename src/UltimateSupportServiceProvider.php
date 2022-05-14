<?php

namespace LaravelReady\UltimateSupport;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

use LaravelReady\UltimateSupport\Facades\UltimateSupport;

final class LicenseServerServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
    }

    public function register(): void
    {
        $this->app->singleton('ultimate-support', function () {
            return new UltimateSupport();
        });
    }
}

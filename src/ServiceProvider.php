<?php

namespace Rton\LaravelQpdfPhpWrapper;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Rton\QpdfPhpWrapper\Pdf;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('Qpdf', function () {
            return new Pdf();
        });
    }
}

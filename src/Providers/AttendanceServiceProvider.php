<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;

class AttendanceServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\OfficeServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\EmployeeServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\ActivityServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);
    }
}

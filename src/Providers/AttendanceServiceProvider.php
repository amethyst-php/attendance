<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class AttendanceServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\OfficeServiceProvider::class);
        $this->app->register(\Amethyst\Providers\EmployeeServiceProvider::class);
        $this->app->register(\Amethyst\Providers\ActivityServiceProvider::class);
        $this->app->register(\Amethyst\Providers\TaxonomyServiceProvider::class);
    }
}

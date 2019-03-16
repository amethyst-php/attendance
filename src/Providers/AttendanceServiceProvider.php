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

        Config::set('amethyst.activity.data.activity.attributes.activitiable.options.'.\Railken\Amethyst\Models\Attendance::class, \Railken\Amethyst\Managers\AttendanceManager::class);
    }
}

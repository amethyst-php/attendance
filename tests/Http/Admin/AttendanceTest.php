<?php

namespace Amethyst\Tests\Http\Admin;

use Amethyst\Core\Support\Testing\TestableBaseTrait;
use Amethyst\Fakers\AttendanceFaker;
use Amethyst\Tests\BaseTest;

class AttendanceTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = AttendanceFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'admin.attendance';
}

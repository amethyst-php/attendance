<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\AttendanceFaker;
use Amethyst\Managers\AttendanceManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class AttendanceTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = AttendanceManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = AttendanceFaker::class;
}

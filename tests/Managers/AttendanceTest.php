<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\AttendanceFaker;
use Railken\Amethyst\Managers\AttendanceManager;
use Railken\Amethyst\Tests\BaseTest;
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

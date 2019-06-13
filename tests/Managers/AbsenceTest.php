<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\AbsenceFaker;
use Railken\Amethyst\Managers\AbsenceManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class AbsenceTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = AbsenceManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = AbsenceFaker::class;
}

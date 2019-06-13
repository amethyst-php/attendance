<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class AttendanceFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('office', OfficeFaker::make()->parameters()->toArray());
        $bag->set('employee', EmployeeFaker::make()->parameters()->toArray());
        $bag->set('started_at', (new \DateTime())->format('Y-m-d H:i:s'));
        $bag->set('ended_at', (new \DateTime())->format('Y-m-d H:i:s'));

        return $bag;
    }
}

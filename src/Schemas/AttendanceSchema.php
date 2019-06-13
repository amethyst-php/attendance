<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\EmployeeManager;
use Railken\Amethyst\Managers\OfficeManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class AttendanceSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('office_id')
                ->setRelationName('office')
                ->setRelationManager(OfficeManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('employee_id')
                ->setRelationName('employee')
                ->setRelationManager(EmployeeManager::class)
                ->setRequired(true),
            Attributes\DateTimeAttribute::make('started_at'),
            Attributes\DateTimeAttribute::make('ended_at'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}

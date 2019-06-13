<?php

return [
    'table'      => 'amethyst_attendances',
    'comment'    => 'Attendance',
    'model'      => Railken\Amethyst\Models\Attendance::class,
    'schema'     => Railken\Amethyst\Schemas\AttendanceSchema::class,
    'repository' => Railken\Amethyst\Repositories\AttendanceRepository::class,
    'serializer' => Railken\Amethyst\Serializers\AttendanceSerializer::class,
    'validator'  => Railken\Amethyst\Validators\AttendanceValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\AttendanceAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\AttendanceFaker::class,
    'manager'    => Railken\Amethyst\Managers\AttendanceManager::class,
    'attributes' => [
        'type' => [
            'taxonomy' => 'attendance-type',
        ],
    ],
];

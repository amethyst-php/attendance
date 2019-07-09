<?php

return [
    'table'      => 'amethyst_attendances',
    'comment'    => 'Attendance',
    'model'      => Amethyst\Models\Attendance::class,
    'schema'     => Amethyst\Schemas\AttendanceSchema::class,
    'repository' => Amethyst\Repositories\AttendanceRepository::class,
    'serializer' => Amethyst\Serializers\AttendanceSerializer::class,
    'validator'  => Amethyst\Validators\AttendanceValidator::class,
    'authorizer' => Amethyst\Authorizers\AttendanceAuthorizer::class,
    'faker'      => Amethyst\Fakers\AttendanceFaker::class,
    'manager'    => Amethyst\Managers\AttendanceManager::class,
];

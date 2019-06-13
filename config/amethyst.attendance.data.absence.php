<?php

return [
    'table'      => 'amethyst_absences',
    'comment'    => 'Absence',
    'model'      => Railken\Amethyst\Models\Absence::class,
    'schema'     => Railken\Amethyst\Schemas\AbsenceSchema::class,
    'repository' => Railken\Amethyst\Repositories\AbsenceRepository::class,
    'serializer' => Railken\Amethyst\Serializers\AbsenceSerializer::class,
    'validator'  => Railken\Amethyst\Validators\AbsenceValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\AbsenceAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\AbsenceFaker::class,
    'manager'    => Railken\Amethyst\Managers\AbsenceManager::class,
    'attributes' => [
        'type' => [
            'taxonomy' => 'absence-type',
        ],
    ],
];

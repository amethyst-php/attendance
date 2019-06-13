<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\AbsencesController::class,
    'router'     => [
        'as'     => 'absence.',
        'prefix' => '/absences',
    ],
];

<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class AttendanceAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'attendance.create',
        Tokens::PERMISSION_UPDATE => 'attendance.update',
        Tokens::PERMISSION_SHOW   => 'attendance.show',
        Tokens::PERMISSION_REMOVE => 'attendance.remove',
    ];
}

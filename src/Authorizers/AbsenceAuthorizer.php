<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class AbsenceAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'absence.create',
        Tokens::PERMISSION_UPDATE => 'absence.update',
        Tokens::PERMISSION_SHOW   => 'absence.show',
        Tokens::PERMISSION_REMOVE => 'absence.remove',
    ];
}

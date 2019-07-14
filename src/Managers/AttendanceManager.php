<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Attendance                 newEntity()
 * @method \Amethyst\Schemas\AttendanceSchema          getSchema()
 * @method \Amethyst\Repositories\AttendanceRepository getRepository()
 * @method \Amethyst\Serializers\AttendanceSerializer  getSerializer()
 * @method \Amethyst\Validators\AttendanceValidator    getValidator()
 * @method \Amethyst\Authorizers\AttendanceAuthorizer  getAuthorizer()
 */
class AttendanceManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.attendance.data.attendance';
}

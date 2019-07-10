<?php

namespace Amethyst\Models;

use Amethyst\Common\ConfigurableModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Lem\Contracts\EntityContract;

class Attendance extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.attendance.data.attendance');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function office(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.office.data.office.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.employee.data.employee.model'));
    }

    /**
     * @return float
     */
    public function getDurationAttribute(): float
    {
        return ($this->ended_at && $this->started_at) ? $this->ended_at->timestamp - $this->started_at->timestamp : 0;
    }

    public function toArray()
    {
        return array_merge(parent::toArray(), ['duration' => $this->duration]);
    }
}

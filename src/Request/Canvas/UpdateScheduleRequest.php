<?php

namespace ImmobiliareLabs\BrazeSDK\Request\Canvas;

use ImmobiliareLabs\BrazeSDK\Exception\ValidationException;
use ImmobiliareLabs\BrazeSDK\Object\Schedule;
use ImmobiliareLabs\BrazeSDK\Request\BaseRequest;

class UpdateScheduleRequest extends BaseRequest
{
    /** @var ?string */
    public $canvas_id;

    /** @var ?string */
    public $schedule_id;

    /** @var ?Schedule */
    public $schedule;

    public function validate(bool $strict): void
    {
        if (null === $this->canvas_id) {
            throw new ValidationException('The "canvas_id" field is required');
        }

        if (null === $this->schedule_id) {
            throw new ValidationException('The "schedule_id" field is required');
        }

        if (null === $this->schedule) {
            throw new ValidationException('The "schedule" field is required');
        }
    }
}

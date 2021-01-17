<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Draft()
 * @method static static Completed()
 */
final class RefresherStatus extends Enum
{
    const Draft = 1;
    const Completed = 2;

    public function toArray()
    {
        return $this;
    }
}

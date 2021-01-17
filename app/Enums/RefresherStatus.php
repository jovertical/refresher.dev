<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Draft()
 * @method static static Completed()
 */
final class RefresherStatus extends Enum
{
    public const Draft = 1;
    public const Completed = 2;

    public function toArray()
    {
        return $this;
    }
}

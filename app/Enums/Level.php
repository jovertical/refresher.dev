<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Beginner()
 * @method static static Intermediate()
 * @method static static Advanced()
 */
final class Level extends Enum
{
    public const Beginner = 1;
    public const Intermediate = 2;
    public const Advanced = 3;

    public function toArray()
    {
        return $this;
    }
}

<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Beginner()
 * @method static static Intermediate()
 * @method static static Advanced()
 */
final class Difficulty extends Enum
{
    const Beginner = 1;
    const Intermediate = 2;
    const Advanced = 3;

    public function toArray()
    {
        return $this;
    }
}

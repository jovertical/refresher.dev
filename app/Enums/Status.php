<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Info()
 * @method static static Success()
 * @method static static Warning()
 * @method static static Error()
 */
final class Status extends Enum
{
    const Info    = 'info';
    const Success = 'success';
    const Warning = 'warning';
    const Error   = 'error';
}

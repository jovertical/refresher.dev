<?php

namespace App\Support;

use Carbon\Carbon;

class DisplayableDate
{
    public function __construct(protected $key, $value)
    {
        $this->value = Carbon::parse($value);
    }

    public function toArray()
    {
        return [
            'key' => $this->key,
            'value' => $this->value->format('Y-m-d'),
            'text' => $this->value->toFormattedDateString()
        ];
    }
}

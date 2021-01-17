<?php

namespace App\Support;

trait DisplaysDates
{
    public function getDateAttribute()
    {
        return collect($this->displayableDates)->map(
            fn ($key) => (new DisplayableDate($key, $this->{$key}))->toArray()
        )->keyBy('key');
    }
}

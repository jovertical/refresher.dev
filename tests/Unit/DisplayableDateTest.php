<?php

use App\Support\DisplayableDate;

it('can be transformed to an array', function () {
    $date = (new DisplayableDate('booted_at', '1970-01-01 00:00:00'))->toArray();

    test()->assertEquals([
        'key' => 'booted_at',
        'value' => '1970-01-01',
        'text' => 'Jan 1, 1970'
    ], $date);
});

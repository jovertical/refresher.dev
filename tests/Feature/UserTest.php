<?php

use App\Models\Refresher;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Tests\login;

uses(RefreshDatabase::class);

it('can have many refresher', function () {
    $user = login();

    Refresher::factory()
        ->times(10)
        ->create(['user_id' => $user->id]);

    test()->assertInstanceOf(Refresher::class, $user->refreshers->first());
    test()->assertCount(10, $user->refreshers);
});

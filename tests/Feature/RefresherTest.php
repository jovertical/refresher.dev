<?php

use App\Models\Refresher;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Tests\login;

uses(RefreshDatabase::class);

it('belongs to a creator', function () {
    $user = login();
    $refresher = Refresher::factory()->create(['user_id' => $user->id]);

    test()->assertInstanceOf(User::class, $refresher->creator);
    test()->assertEquals($user->id, $refresher->user_id);
});

<?php

use App\Models\Refresher;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\get;
use function Tests\login;

uses(RefreshDatabase::class);

it('can display a listing of refresher', function () {
    $user = login();

    Refresher::factory()
        ->times(10)
        ->create(['user_id' => $user->id]);

    get('/refreshers')
        ->assertInertia('Refreshers/Index')
        ->assertInertiaHas('refreshers')
        ->assertInertiaCount('refreshers.data', 10);
});

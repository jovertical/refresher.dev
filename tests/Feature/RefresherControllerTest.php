<?php

use App\Models\Refresher;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\get;
use function Tests\login;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = login();
});

it('can display a listing of refresher', function () {
    Refresher::factory()
        ->times(10)
        ->create(['user_id' => $this->user->id]);

    get(route('refreshers.index'))
        ->assertInertia('Refreshers/Index')
        ->assertInertiaHas('refreshers')
        ->assertInertiaCount('refreshers.data', 10);
});

it('can display a specified refresher', function () {
    $refresher = Refresher::factory()->create(['user_id' => $this->user->id]);

    get(route('refreshers.show', $refresher))
        ->assertInertia('Refreshers/Show')
        ->assertInertiaHas('refresher');
});

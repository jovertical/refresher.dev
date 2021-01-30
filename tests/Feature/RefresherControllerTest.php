<?php

use App\Enums\Level;
use App\Models\Refresher;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Faker\faker;
use function Pest\Laravel\{get, post};
use function Tests\login;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = login();
});

test('users can display a listing of refresher', function () {
    Refresher::factory()
        ->times(10)
        ->create(['user_id' => $this->user->id]);

    get(route('refreshers.index'))
        ->assertInertia('Refreshers/Index')
        ->assertInertiaHas('refreshers')
        ->assertInertiaCount('refreshers.data', 10);
});

test('users can create a new refresher', function () {
    get(route('refreshers.create'))
        ->assertInertia('Refreshers/Create')
        ->assertInertiaHas('levels');

    $response = post(route('refreshers.store'), [
        'title' => 'JavaScript - The Hard Parts',
        'description' => faker()->paragraph,
        'difficulty' => faker()->randomElement(Level::getValues())
    ]);

    $response->assertRedirect(route('refreshers.items.index', 11));

    test()->assertDatabaseHas('refreshers', [
        'title' => 'JavaScript - The Hard Parts'
    ]);
});

test('users can view a specified refresher', function () {
    $refresher = Refresher::factory()->create(['user_id' => $this->user->id]);

    get(route('refreshers.show', $refresher))
        ->assertInertia('Refreshers/Show')
        ->assertInertiaHas('refresher');
});

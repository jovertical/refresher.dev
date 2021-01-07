<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('profile settings screen can be rendered', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/settings/profile');

    $response->assertInertia('Settings/Profile');
});

test('profile information can be updated', function () {
    $user = User::factory()->create();

    $this->get('/settings/profile');

    $this->actingAs($user);

    $response = $this->patch('/settings/profile', [
        'first_name' => $user->first_name,
        'last_name' => $user->last_name,
        'email' => 'test@example.com'
    ]);

    $this->assertDatabaseHas('users', ['email' => 'test@example.com']);

    $response->assertRedirect('/settings/profile');
});

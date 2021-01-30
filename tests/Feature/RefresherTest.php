<?php

use App\Models\Refresher;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('belongs to a creator', function () {
    $user = User::factory()->create();
    $refresher = Refresher::factory()->create(['user_id' => $user->id]);

    test()->assertInstanceOf(User::class, $refresher->creator);
    test()->assertEquals($user->id, $refresher->user_id);
});

it('can belong to many skill', function () {
    $laravelDesignPatterns = Refresher::factory()->create([
        'title' => 'Laravel Design Patterns'
    ]);

    $php = Skill::factory()->create(['name' => 'PHP']);
    $laravel = Skill::factory()->create(['name' => 'Laravel']);

    $php->refreshers()->attach($laravelDesignPatterns);
    $laravel->refreshers()->attach($laravelDesignPatterns);

    test()->assertCount(2, $laravelDesignPatterns->skills);
    test()->assertInstanceOf(Skill::class, $laravelDesignPatterns->skills->first());
});

<?php

use App\Models\Refresher;
use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can belong to many refresher', function () {
    $php = Skill::factory()->create(['name' => 'PHP']);

    $php101 = Refresher::factory()->create(['title' => 'PHP 101']);
    $laravelForBabies = Refresher::factory()->create([
        'title' => 'Laravel for Babies'
    ]);

    $php101->skills()->attach($php);
    $laravelForBabies->skills()->attach($php);

    test()->assertCount(2, $php->refreshers);
    test()->assertInstanceOf(Refresher::class, $php->refreshers->first());
});

<?php

namespace Database\Factories;

use App\Enums\Level;
use App\Enums\RefresherStatus;
use App\Models\Refresher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RefresherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Refresher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => Str::title($this->faker->sentence(rand(3, 5))),
            'description' => $this->faker->paragraph,
            'difficulty' => $this->faker->randomElement(Level::getValues()),
            'status' => RefresherStatus::Draft,
        ];
    }
}

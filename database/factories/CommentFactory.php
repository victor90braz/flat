<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Flat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'flat_id' => Flat::factory(),
            'body' => $this->faker->paragraph(),
        ];
    }
}

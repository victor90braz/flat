<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Flat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'flat_id' => Flat::factory(),
            'body' => $this->faker->paragraph(),
        ];
    }
}

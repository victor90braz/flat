<?php

namespace Database\Seeders;

use Database\Factories\CommentFactory;
use Database\Factories\FlatFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        UserFactory::new()->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        FlatFactory::new()->count(10)->create();

        CommentFactory::new()->count(10)->create();
    }
}

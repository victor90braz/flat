<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\CommentFactory;
use Database\Factories\FlatFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        FlatFactory::new()->count(10)->create();

        CommentFactory::new()->count(10)->create();
    }
}

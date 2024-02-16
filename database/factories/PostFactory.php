<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'excerpt' => fake()->sentences(5, true),
            'content' => fake()->paragraphs(3, true),
            'slug' => fake()->slug,
            'user_id' => User::factory(),
            'published_at' => Carbon::now(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2, 6)),
            'slug' => fake()->unique()->slug(),
            'excerpt' => fake()->paragraph(mt_rand(5, 10)),
            'body' => fake()->paragraph(mt_rand(10, 20)),
            'category_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 3)
        ];
    }
}
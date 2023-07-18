<?php

namespace Database\Factories;

use App\Models\postcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
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
            'title' => fake()->sentence(2),
            'user_id' => User::factory()->create(),
            'postcategory_id' => postcategory::factory()->create(),
            'slug' => fake()->slug(2),
            'extract' => fake()->sentence(),
            'body' => fake()->paragraph(),
        ];
    }
}

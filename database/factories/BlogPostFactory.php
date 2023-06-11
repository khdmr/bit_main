<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'id_author' => fake()->numberBetween(1, 7),
            'summary' => $this->faker->paragraph,
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}

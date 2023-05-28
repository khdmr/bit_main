<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course_Model>
 */
class Course_ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_course' => fake()->numberBetween(1, 4),
            'id_modul' => fake()->numberBetween(1, 9),
        ];
    }
}

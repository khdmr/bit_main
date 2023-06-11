<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseCategory>
 */
class CourseCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courseCategory = [
            'Web Development',
            'Mobile Development',
            'Machine Learning',
            'Data Science',
            'Artificial Intelligence',
        ];

        return [
            'name_category' => $this->faker->unique()->randomElement($courseCategory),
        ];
    }
}
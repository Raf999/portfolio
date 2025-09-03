<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // short project title
            'category' => $this->faker->randomElement([
                'Web Development',
                'Mobile App',
                'Machine Learning',
                'UI/UX Design',
                'IoT',
            ]),
            'description' => $this->faker->paragraph(4),
            'image_url' => $this->faker->imageUrl(640, 480, 'business', true, 'Project'),
            'project_url' => $this->faker->url(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tittle' => fake()->sentence(mt_rand(2, 8)),
            'slug' =>  fake()->slug(),
            'category_id' => fake()->numberBetween(1, 5),
            'user_id' => fake()->numberBetween(1, 23),
            'excerpt' => fake()->text(100),
            'description' => fake()->text(500),
            'image' => fake()->imageUrl(640, 480, 'technics', true),
        ];
    }
}

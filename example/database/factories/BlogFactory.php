<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'category' => $this->faker->word,
            'tag' => $this->faker->word,
            'description' => $this->faker->text,
            'image' => $this->faker->word . '.jpg',
        ];
    }
}

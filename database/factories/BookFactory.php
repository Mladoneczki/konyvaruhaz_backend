<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = ['Thriller', 'Horror', 'Romance', 'Sci-Fi', 'Fantasy'];
        return [
            'Author' => fake()->name(),
            'Title' => fake()->sentence(),
            'category' => $this->faker->randomElement($categories),
            'Dated'=>fake()->date()
        ];
    }
}

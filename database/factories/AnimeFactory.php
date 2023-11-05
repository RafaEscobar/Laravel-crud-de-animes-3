<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anime>
 */
class AnimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'anime_portada_path' => 'public/portadas/' . fake()->image('public/storage/portadas', 640, 480, null, false),
            'genere' => fake()->word(),
            'seasonCount' => fake()->numberBetween(1, 15),
        ];
    }
}

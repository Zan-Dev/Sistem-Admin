<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KK>
 */
class KKFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noKK' => fake()->unique()->numerify('################'),
            'alamat' => fake('id_ID')->address(),
            'rt' => fake()->numerify('0##'),
            'rw' => fake()->numerify('0##'),
        ];
    }
}

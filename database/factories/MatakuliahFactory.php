<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_mk' => fake()->unique()->regexify("[A-Z]{3}[0-9]{5}"),
            'nama_mk' => fake()->optional(0.9, "not named yet")->words(10, true),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 6)
        ];
    }
}

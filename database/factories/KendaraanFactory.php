<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->firstName(),
            'nama_perusahaan' => fake()->company(),
            'no_lambung' => fake()->randomNumber(),
            'no_polisi' => fake()->randomNumber(),
        ];
    }
}

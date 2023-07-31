<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BahanBakar>
 */
class BahanBakarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'driver_id' => random_int(0,40),
            'jarak' => random_int(20,100),
            'harga' => fake()->randomNumber(4),
            'foto_url' => "https://upload.wikimedia.org/wikipedia/commons/e/e7/Metric_speedometer_from_a_1992_Euro-spec_Passat_B3.jpg",
        ];
    }
}

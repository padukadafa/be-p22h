<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' =>fake()->name(),
            'nik' => fake()->creditCardNumber(),
            'password' => bcrypt('password'),
            'jenis_kelamin' => 'laki-laki',
            'tanggal_lahir' => fake()->dateTime(),
            'alamat' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
            'lokasi_kerja' => fake()->locale(),
            'shift' => 'shift 1',
            'kendaraan_id' => random_int(0,29),
            'nama_perusahaan' => fake()->company(),
        ];
    }
}

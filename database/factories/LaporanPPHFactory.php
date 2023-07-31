<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaporanPPH>
 */
class LaporanPPHFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 0,
            'driver_id' => random_int(0,40),
            'kendaraan_id' => random_int(0,30),
            'stnk' => fake()->boolean(30),
            'buku_kir' => fake()->boolean(30),
            'izin_usaha' => fake()->boolean(30),
            'izin_tio' => fake()->boolean(30),
            'izin_masuk_kota' => fake()->boolean(30),
            'kebersihan_kabin' => fake()->boolean(30),
            'kondisi_ac' => fake()->boolean(30),
            'pemadam_api' => fake()->boolean(30),
            'first_aid_kit' => fake()->boolean(30),
            'safety_belt' => fake()->boolean(30),
            'spion' => fake()->boolean(30),
            'klakson' => fake()->boolean(30),
            'radio_komunikasi' => fake()->boolean(30),
            'bendera' => fake()->boolean(30),
            'lampu' => fake()->boolean(30),
            'alarm_belakang' => fake()->boolean(30),
            'pintu' => fake()->boolean(30),
            'ban_depan_kanan' => fake()->boolean(30),
            'ban_depan_kiri' => fake()->boolean(30),
            'ban_belakang_kanan' => fake()->boolean(30),
            'ban_belakang_kiri' => fake()->boolean(30),
            'wiper' => fake()->boolean(30),
            'jarum_petunjuk' => fake()->boolean(30),
            'rem_tangan' => fake()->boolean(30),
            'segitiga_pengaman' => fake()->boolean(30),
            'kondisi_kemudi' => fake()->boolean(30),
            'minyak_rem' => fake()->boolean(30),
            'fungsi_rem' => fake()->boolean(30),
            'oli_power_steering' => fake()->boolean(30),
            'air_radiotor' => fake()->boolean(30),
            'oli_mesin' => fake()->boolean(30),
            'minyak_kopling' => fake()->boolean(30),
            'kondisi_baterai' => fake()->boolean(30),
            'fungsi_double_gardan' => fake()->boolean(30),
            'dongkrak' => fake()->boolean(30),
            'kunci_roda' => fake()->boolean(30),
            'handel_jack' => fake()->boolean(30),
            'status' => 'disetujui',
            'tanggal_dikonfirmasi' => fake()->dateTime(),



            
        ];
    }
}

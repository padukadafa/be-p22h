<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BahanBakar;
use App\Models\Driver;
use App\Models\Kendaraan;
use App\Models\LaporanPPH;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserRolePermissionSeeder::class);
        Driver::factory()->count(50)->create();
        BahanBakar::factory()->count(200)->create();
        Kendaraan::factory()->count(30)->create();
        LaporanPPH::factory()->count(200)->create();
    }
}

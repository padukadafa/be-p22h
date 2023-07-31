<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUser = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'nik' => fake()->creditCardNumber(),
            'jenis_kelamin' => 'laki-laki',
            'tanggal_lahir' => fake()->dateTime(),
            'alamat' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
            'lokasi_kerja' => fake()->locale(),
        ];
        $superAdmin = User::create(array_merge([
            'email' => 'superadmin@gmail.com',
            'nama' => 'superadmin',
            'role' => 'superadmin',
        ],$defaultUser));
        $pengawas = User::create(array_merge([
            'email' => 'pengawas@gmail.com',
            'nama' => 'pengawas',
            'role' => 'pengawas',
        ],$defaultUser));
        $bos = User::create(array_merge([
            'email' => 'bos@gmail.com',
            'nama' => 'bos',
            'role' => 'bos',
        ],$defaultUser));
        $role_superadmin = Role::create(['name' => 'superadmin']);
        $role_pengawas = Role::create(['name' => 'pengawas']);
        $role_bos = Role::create(['name' => 'bos']);

        

        $permission = Permission::create(['name' =>'read role']);
        $permission = Permission::create(['name' =>'create role']);
        $permission = Permission::create(['name' =>'update role']);
        $permission = Permission::create(['name' =>'delete role']);

        
        $role_superadmin->givePermissionTo(['read role','create role','update role','delete role']);
        $superAdmin->assignRole('superadmin');
        $pengawas->assignRole('pengawas');
        $bos->assignRole('bos');
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'is_admin' => '1',
            'email' => 'admin@lpi-arroqy.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now()
            ]);
        User::create([
            'name' => 'Pendidik',
            'username' => 'pendidik',
            'is_admin' => '2',
            'email' => 'pendidik@lpi-arroqy.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now()
            ]);
    }
}

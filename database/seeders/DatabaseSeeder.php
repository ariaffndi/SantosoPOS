<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
        'name' => 'Admin 1',
        'email' => 'admin1@gmail.com',
        'password' => Hash::make('passadmin1'),
        'role' => 'admin',
    ]);

    User::create([
        'name' => 'Kasir 1',
        'email' => 'kasir1@gmail.com',
        'password' => Hash::make('passkasir1'),
        'role' => 'kasir',
    ]);
    }
}

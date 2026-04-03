<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {              
       User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role' => 'Admin',
            'password' => bcrypt('admin'),
        ]);

    }
}

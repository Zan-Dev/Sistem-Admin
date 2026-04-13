<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {              
        $this->call([
            PekerjaanSeeder::class,
            UserSeeder::class,
            KKSeeder::class,
            PendudukSeeder::class,
        ]);    

    }
}

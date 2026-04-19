<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Penduduk;
use Illuminate\Database\Seeder;
use Database\Seeders\PekerjaanSeeder;
use Database\Seeders\KKSeeder;
use Database\Seeders\PendudukSeeder;
use Database\Seeders\PegawaiSeeder;
use Database\Seeders\UserSeeder;


class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {              
        $this->call([
            PekerjaanSeeder::class,
            UserSeeder::class,
            KKSeeder::class,
            PendudukSeeder::class,
            PegawaiSeeder::class,
        ]);    

    }
}

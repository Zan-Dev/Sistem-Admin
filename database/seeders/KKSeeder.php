<?php

namespace Database\Seeders;

use App\Models\KK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KK::factory()->count(5)->create();
    }
}

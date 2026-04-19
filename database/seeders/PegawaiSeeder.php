<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use App\Models\Penduduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatan = [
            'Kepala Desa',
            'Sekretaris Desa',
            'Kasi Pemerintahan',
            'Kasi Kesejahteraan',
            'Kasi Pelayanan',
            'Kaur Keuangan',
            'Kaur Perencanaan',
            'Kaur Umum',
            'Kaur Tata Usaha dan Rumah Tangga',
            'Staf Pemerintahan',
            'Staf Kesejahteraan',
            'Staf Pelayanan',
        ];

        foreach ($jabatan as $j) {
            Pegawai::create([
                'jabatan' => $j,
                'nik' => Penduduk::inRandomOrder()->first()->nik,
            ]);
        }

        for ($i=1; $i<=10; $i++){
            Pegawai::create([
                'jabatan' => 'Ketua RT ' . $i,
                'nik' => Penduduk::inRandomOrder()->first()->nik,
            ]);

            Pegawai::create([
                'jabatan' => 'Ketua RW ' . $i,
                'nik' => Penduduk::inRandomOrder()->first()->nik,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $daftarPekerjaan = [        
            'Belum/Tidak Bekerja', 
            'Mengurus Rumah Tangga', 
            'Pelajar/Mahasiswa', 
            'Pensuinan', 
            'PNS', 
            'TNI', 
            'Kepolisian RI', 
            'Pedagangan', 
            'Petani/Pekebun', 
            'Peternak', 
            'Nelayan/Perikanan', 
            'Industri', 
            'Konstruksi', 
            'Transportasi', 
            'Karyawan Swasta', 
            'Karyawan BUMN', 
            'Karyawan BUMD', 
            'Karyawan Honorer', 
            'Buruh Harian Lepas', 
            'Buruh Tani/Perkebunan', 
            'Buruh Nelayan/Perikanan', 
            'Buruh Peternakan', 
            'Pembantu Rumah Tangga', 
            'Tukang Cukur', 
            'Tukang Listrik', 
            'Tukang Batu', 
            'Tukang Kayu', 
            'Tukang Sol Sepatu', 
            'Tukang Las/Pandai Besi', 
            'Tukang Jahit', 
            'Tukang Gigi', 
            'Penata Rias', 
            'Penata Busana', 
            'Penata Rambut', 
            'Mekanik', 
            'Seniman', 
            'Tabib', 
            'Paraji', 
            'Perancang Busana', 
            'Penterjemah', 
            'Imam Mesjid', 
            'Pendeta', 
            'Pastor', 
            'Wartawan', 
            'Ustadz/Mubaligh', 
            'Juru Masak', 
            'Promotor Acara', 
            'Anggota DPR-RI', 
            'Anggota DPD', 
            'Anggota BPK', 
            'Presiden', 
            'Wakil Presiden', 
            'Anggota MK', 
            'Anggota Kabinet/Kementerian', 
            'Duta Besar', 
            'Gubernur', 
            'Wakil Gubernur', 
            'Bupati', 
            'Wakil Bupati', 
            'Walikota', 
            'Wakil Walikota', 
            'Anggota DPRD Provinsi', 
            'Anggota DPRD Kabupaten/Kota', 
            'Dosen', 
            'Guru', 
            'Pilot', 
            'Pengacara', 
            'Notaris', 
            'Arsitek', 
            'Akuntan', 
            'Konsultan', 
            'Dokter', 
            'Bidan', 
            'Perawat', 
            'Apoteker', 
            'Psikiater/Psikolog', 
            'Penyiar Televisi', 
            'Penyiar Radio', 
            'Pelaut', 
            'Peneliti', 
            'Spoir', 
            'Pialang', 
            'Paranormal', 
            'Pedagang', 
            'Perangkat Desa', 
            'Kepala Desa', 
            'Biarawati', 
            'Wiraswasta'        
        ];

        foreach ($daftarPekerjaan as $pekerjaan) {
            Pekerjaan::create([
                'pekerjaan' => $pekerjaan,
            ]);
        }
    }
}

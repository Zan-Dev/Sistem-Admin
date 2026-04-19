<?php

namespace Database\Factories;

use App\Models\KK;
use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => fake()->unique()->numerify('################'),
            'nama' => fake('id_ID')->name(),
            'kkId' => KK::inRandomOrder()->first()->id, // Otomatis cari ID KK yang ada
            'tempatLahir' => fake('id_ID')->city(),
            'tanggalLahir' => fake()->date(),
            'statusPerkawinan' => fake()->randomElement(['Sudah', 'Belum', 'Pernah']),
            'statusHubungan' => fake()->randomElement(['Anak', 'Istri', 'Kepala Keluarga', 'Cucu', 'Orang Tua', 'Mertua', 'Famili Lain']),
            'jenisKelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'kewarganegaraan' => 'Indonesia',
            'pekerjaan_id' => Pekerjaan::inRandomOrder()->first()->id, // Otomatis cari ID Pekerjaan
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'alamat' => fake()->randomElement(['Manggungmangu', 'Parakan', 'Tambirejo']),
            'rt' => fake()->numerify('0##'),
            'rw' => fake()->numerify('0##'),
        ];
    }
}

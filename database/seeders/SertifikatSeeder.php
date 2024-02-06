<?php

namespace Database\Seeders;

use App\Models\Sertifikat; // Corrected namespace
use Illuminate\Database\Seeder;

class SertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sertifikat::create([
            'company' => 'Contoh Company',
            'kepsek' => 'Contoh Kepala Sekolah',
            'kaprok' => 'Contoh Kepala Produksi',
            'tempat' => 'Contoh Tempat',
            'tgl_sertifikat' => now(),
            'gambar_kepsek' => 'gambar/blank1.jpg',
            'gambar_kaprok' => 'gambar/blank2.jpg',
        ]);
    }
}

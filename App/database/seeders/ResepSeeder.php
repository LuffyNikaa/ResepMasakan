<?php

namespace Database\Seeders;

use App\Models\resep as ModelsResep;
use App\Models\tbl_masakan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tbl_masakan::insert([
            [
                'gambar' => '/Image/1.nasgor.jpg',
                'judul' => 'Nasi goreng',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/2.ayam_cabe.jpg',
                'judul' => 'Ayam cabe',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/3.sate_kulitayam.jpg',
                'judul' => 'Sate kulit ayam',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/1.nasgor.jpg',
                'judul' => 'Nasi goreng',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],

        ]);
    }
}

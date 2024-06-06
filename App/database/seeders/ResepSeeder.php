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
                'gambar' => '/Image/4.ayam_geprek.jpg',
                'judul' => 'Ayam Geprek',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/5.ayam_goreng.jpg',
                'judul' => 'Ayam Goreng',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/6.ayam_fillet.jpg',
                'judul' => 'Ayam Fillet',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/7.oseng_buncis.png',
                'judul' => 'Oseng Buncis',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/8.rendang_jengkol.jpg',
                'judul' => 'Rendang Jengkol',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/9.kentang_balado.jpg',
                'judul' => 'Kentang Balado',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/10.ayam_gorangtepung.jpg',
                'judul' => 'Ayam Goreng Tepung',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/11.sop_ayambening.jpg',
                'judul' => 'Sop Ayam Bening',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/12.tahu_kocek.jpg',
                'judul' => 'Tahu Kocek',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/13.ayam_bakar.jpg',
                'judul' => 'Ayam Bakar',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
            [
                'gambar' => '/Image/14.bubur_ayam.jpg',
                'judul' => 'Bubur Ayam',
                'keterangan' => 'a',
                'tutorial' => 'a',
                'bahan' => 'a'
            ],
        ]);
    }
}

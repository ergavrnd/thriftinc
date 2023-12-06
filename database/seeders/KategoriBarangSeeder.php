<?php

namespace Database\Seeders;

use App\Models\Kategori_barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori_barang::create([
            "Nama_Kategori" => "Women's Catalog",
            "slug" => "women's-catalog",
            "gambar" => "model5.jpg"
        ]);

        Kategori_barang::create([
            "Nama_Kategori" => "Man's Catalog",
            "slug" => "man's-catalog",
            "gambar" => "cowok.jpg"
        ]);

        Kategori_barang::create([
            "Nama_Kategori" => "Accessories Catalog",
            "slug" => "accessories-catalog",
            "gambar" => "glassess.jpg"
        ]);
    }
}

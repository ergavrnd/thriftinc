<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            "kategoriBarang_id" => 1,
            "Nama_barang" => "Crewneck Nike",
            "slug" => "crewneck-nike",
            "Jumlah_barang" => 1,
            "Harga_barang" => 70000,
            "Foto_barang" => "model12.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Crewneck",
        "slug" => "crewneck",
        "Jumlah_barang" => 1,
        "Harga_barang" => 75000,
        "Foto_barang" => "crewneck.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Radio",
        "slug" => "radio",
        "Jumlah_barang" => 1,
        "Harga_barang" => 120000,
        "Foto_barang" => "radio.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Jacket",
        "slug" => "jacket",
        "Jumlah_barang" => 1,
        "Harga_barang" => 90000,
        "Foto_barang" => "model22.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Jacket",
        "slug" => "jacket-m",
        "Jumlah_barang" => 1,
        "Harga_barang" => 85000,
        "Foto_barang" => "jacket2.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Pants",
        "slug" => "pants",
        "Jumlah_barang" => 1,
        "Harga_barang" => 60000,
        "Foto_barang" => "st.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Shirt",
        "slug" => "shirt",
        "Jumlah_barang" => 1,
        "Harga_barang" => 40000,
        "Foto_barang" => "model9.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Dress",
        "slug" => "dress",
        "Jumlah_barang" => 1,
        "Harga_barang" => 85000,
        "Foto_barang" => "model23.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Skirt",
        "slug" => "skirt",
        "Jumlah_barang" => 1,
        "Harga_barang" => 50000,
        "Foto_barang" => "rok.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Vest",
        "slug" => "vest",
        "Jumlah_barang" => 1,
        "Harga_barang" => 35000,
        "Foto_barang" => "vest24.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Shirt",
        "slug" => "shirt-m",
        "Jumlah_barang" => 1,
        "Harga_barang" => 35000,
        "Foto_barang" => "kaos3.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Shoes",
        "slug" => "shoes",
        "Jumlah_barang" => 1,
        "Harga_barang" => 130000,
        "Foto_barang" => "shoes2.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Hoodie",
        "slug" => "hoodie",
        "Jumlah_barang" => 1,
        "Harga_barang" => 75000,
        "Foto_barang" => "hoodie.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Vest",
        "slug" => "vest-m",
        "Jumlah_barang" => 1,
        "Harga_barang" => 35000,
        "Foto_barang" => "vest3.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Belt",
        "slug" => "belt",
        "Jumlah_barang" => 1,
        "Harga_barang" => 40000,
        "Foto_barang" => "kor.jpg",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Wallet",
        "slug" => "wallet",
        "Jumlah_barang" => 1,
        "Harga_barang" => 80000,
        "Foto_barang" => "dom.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Watch",
        "slug" => "watch",
        "Jumlah_barang" => 1,
        "Harga_barang" => 50000,
        "Foto_barang" => "jam.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Glasses",
        "slug" => "glasses",
        "Jumlah_barang" => 1,
        "Harga_barang" => 45000,
        "Foto_barang" => "glasses.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Analog",
        "slug" => "analog",
        "Jumlah_barang" => 1,
        "Harga_barang" => 50000,
        "Foto_barang" => "analog.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Hat",
        "slug" => "hat",
        "Jumlah_barang" => 1,
        "Harga_barang" => 20000,
        "Foto_barang" => "hat.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 3,
        "Nama_barang" => "Shoulder bag",
        "slug" => "shoulder bag",
        "Jumlah_barang" => 1,
        "Harga_barang" => 30000,
        "Foto_barang" => "moo.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 1,
        "Nama_barang" => "Boots",
        "slug" => "boots",
        "Jumlah_barang" => 1,
        "Harga_barang" => 120000,
        "Foto_barang" => "model15.png",
        ]);

        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Short pants",
        "slug" => "short-pants-man",
        "Jumlah_barang" => 1,
        "Harga_barang" => 50000,
        "Foto_barang" => "co.jpg",
        ]);
        
        Barang::create([
        "kategoriBarang_id" => 2,
        "Nama_barang" => "Jogger",
        "slug" => "jogger",
        "Jumlah_barang" => 1,
        "Harga_barang" => 40000,
        "Foto_barang" => "jjj.jpg",
        ]);



    }
}

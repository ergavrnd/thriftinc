<?php

namespace Database\Seeders;

use App\Models\JasaKirim;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JasaKirimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JasaKirim::create([
        "Nama_jasa" => "JNT",
        "slug" => "jnt",
        "harga" => 15000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "JNE",
        "slug" => "jne",
        "harga" => 10000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "Sicepat",
        "slug" => "sicepat",
        "harga" => 18000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "Antar aja",
        "slug" => "antar-aja",
        "harga" => 20000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "Tiki",
        "slug" => "tiki",
        "harga" => 12000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "Wahana",
        "slug" => "wahana",
        "harga" => 13000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "ID Express",
        "slug" => "id-express",
        "harga" => 14000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "Indah Logistik",
        "slug" => "indah-logistik",
        "harga" => 25000
        ]);

        JasaKirim::create([
        "Nama_jasa" => "Pos Indonesia",
        "slug" => "pos-indonesia",
        "harga" => 28000
        ]);
    }
}

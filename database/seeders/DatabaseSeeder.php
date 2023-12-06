<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\BarangSeeder;
use Database\Seeders\PaymentSeeder;
use Database\Seeders\JasaKirimSeeder;
use Database\Seeders\KategoriBarangSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KategoriBarangSeeder::class,
            BarangSeeder::class,
            JasaKirimSeeder::class,
            PaymentSeeder::class
        ]);
    }
}

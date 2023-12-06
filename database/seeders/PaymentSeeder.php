<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            "name"=>"BCA",
            "slug"=>"bca"
        ]);

        Payment::create([
            "name"=>"BNI",
            "slug"=>"bni"
        ]);

        Payment::create([
            "name"=>"BTN",
            "slug"=>"btn"
        ]);
    }
}

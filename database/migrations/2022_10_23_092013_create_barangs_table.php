<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kategoriBarang_id");
            $table->String("Nama_barang");
            $table->String("slug")->unique();
            $table->integer("Jumlah_barang")->nullable();
            $table->integer("Harga_barang");
            $table->String("Foto_barang");
            $table->boolean('isOrder')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->String("nama");
            $table->String("username")->unique();
            $table->string("email")->unique();
            $table->String("password");
            $table->timestamp("email_verified_at")->nullable();
            $table->integer("role_id");
            $table->boolean("jenis_kelamin")->nullable();
            $table->String("alamat")->nullable();
            $table->String("notelp")->nullable();
            $table->String("image")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increment
            $table->string('nama'); //membuat kolom nama
            $table->string('email'); //membuat kolom email
            $table->string('nohp'); //membuat kolom no hp
            $table->text('alamat'); //membuat kolom alamat dengan tipe text
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};

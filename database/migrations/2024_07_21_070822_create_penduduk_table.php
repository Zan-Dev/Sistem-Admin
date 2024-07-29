<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->unique();
            $table->string('nama');
            $table->bigInteger('noKK');
            $table->string('tempatLahir');
            $table->date('ttl');            
            $table->string('statusPerkawinan');
            $table->string('jenisKelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('alamat');            
            $table->integer('rt');
            $table->integer('rw');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};

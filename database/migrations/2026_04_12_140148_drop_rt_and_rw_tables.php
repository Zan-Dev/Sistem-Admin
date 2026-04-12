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
        schema::dropIfExists('rt');
        schema::dropIfExists('rw');
    }

    public function down(): void
    {
        schema::create('rt', function (Blueprint $table) {
            $table->id();
            $table->String('jabatan');
            $table->BigInteger('nik');
            $table->timestamps();
        });

        schema::create('rw', function (Blueprint $table) {
            $table->id();
            $table->String('jabatan');
            $table->BigInteger('nik');            
            $table->timestamps();
        });
    }
};

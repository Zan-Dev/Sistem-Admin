<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    
    public function up(): void
    {
        schema::table('pegawai', function (Blueprint $table) {
            $table->foreign('nik', 'pegawai_nik_foreign')
                  ->references('nik')
                  ->on('penduduk')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    
    public function down(): void
    {
        schema::table('pegawai', function (Blueprint $table) {
            $table->dropForeign('pegawai_nik_foreign');
        });
    }
};

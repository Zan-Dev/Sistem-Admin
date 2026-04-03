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
        Schema::table('penduduk', function (Blueprint $table) {
            $table->dropColumn('id');

            $table->primary('nik');
        });

        Schema::create('kk', function (Blueprint $table) {            
            $table->bigInteger('noKK')->unique();
            $table->bigInteger('nikKepalaKeluarga');
            $table->string('alamat');
            $table->Integer('rt');
            $table->Integer('rw');
            $table->timestamps();
            $table->primary('noKK');

            $table  ->foreign('nikKepalaKeluarga')
                    ->references('nik')
                    ->on('penduduk')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
        });

        Schema::table('penduduk', function (Blueprint $table) {
            $table->dropColumn('noKK');
            $table->BigInteger('kk_id')->nullable()->after('nama');

            $table  ->foreign('kk_id')
                    ->references('noKK')
                    ->on('kk')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

            $table->renameColumn('shdk', 'status_hubungan');

            $table->enum('status_hubungan', [
                'Kepala Keluarga', 
                'Istri', 
                'Anak', 
                'Orang Tua', 
                'Cucu',
                'Mertua',                
                'Lainnya'
            ])->default('Anak')->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penduduk', function (Blueprint $table) {
            $table->dropForeign(['kk_id']);
            $table->dropColumn('kk_id');
            $table->string('noKK')->after('id');
            $table->renameColumn('status_hubungan', 'shdk');
        });

        Schema::dropIfExists('kk');
    }
};

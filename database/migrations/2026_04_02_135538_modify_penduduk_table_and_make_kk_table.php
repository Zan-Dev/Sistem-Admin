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
            $table->bigInteger('nikKepalaKeluarga')->nullable();
            $table->string('alamat');
            $table->Integer('rt');
            $table->Integer('rw');
            $table->timestamps();
            $table->primary('noKK');            
        });

        Schema::table('penduduk', function (Blueprint $table) {
            $table->dropColumn('noKK');
            $table->BigInteger('kkId')->nullable()->after('nama');

            $table  ->foreign('kkId')
                    ->references('noKK')
                    ->on('kk')
                    ->onDelete('set null')
                    ->onUpdate('cascade');

            $table->renameColumn('shdk', 'statusHubungan')->nullable()->change();

            $table->enum('statusHubungan', [
                'Kepala Keluarga', 
                'Istri', 
                'Anak', 
                'Orang Tua', 
                'Cucu',
                'Mertua',                
                'Famili Lain'
            ])->default('Anak')->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {        
        Schema::table('penduduk', function (Blueprint $table) {            
            $table->dropForeign(['kkId']);
            $table->dropColumn('kkId');            
            $table->renameColumn('statusHubungan', 'shdk');                    
            $table->string('shdk')->change(); 
        });
        
        Schema::dropIfExists('kk');

        Schema::table('penduduk', function (Blueprint $table) {
            $table->dropPrimary(['nik']);            
            $table->id()->first();             
            $table->string('noKK')->after('nama')->nullable();
        });
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{
    use HasFactory;
    protected $table = 'kk';

    protected $fillable = [
        'noKK',        
        'alamat',
        'rt',
        'rw',
        'tanggalDibuat',
    ];

    protected $primaryKey = 'noKK';
    public $incrementing = false;
    protected $keyType = 'BigInteger';
       

    public function anggotaKeluarga()
    {
        return $this->hasMany(Penduduk::class, 'kkId', 'noKK');
    }

    public function kepalaKeluarga()
    {
        return $this->hasOne(Penduduk::class, 'kkId', 'noKK')->where('statusHubungan', 'Kepala Keluarga');
    }
}

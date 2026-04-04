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
        'nikKepalaKeluarga',
        'alamat',
        'rt',
        'rw',
    ];

    protected $primaryKey = 'noKK';
    public $incrementing = false;
    protected $keyType = 'BigInteger';
    
    public function kepalaKeluarga()
    {
        return $this->hasOne(Penduduk::class, 'nik', 'nikKepalaKeluarga');
    }
}

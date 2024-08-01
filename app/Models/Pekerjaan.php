<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan';

    public function penduduk(): HasMany
    {
        return $this->hasMany(Penduduk::class);
    }
}

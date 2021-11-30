<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPermohonan extends Model
{
    use HasFactory;
    protected $table ='table_kategori_permohonan';

    public function permohonan()
    {
        return $this->hasMany(Permohonan:all, 'kategori_permohonan', 'id');
    }
}

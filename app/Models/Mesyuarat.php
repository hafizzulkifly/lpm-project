<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesyuarat extends Model
{
    use HasFactory;
    protected $table ='table_mesyuarat';

    public function penilaian()
    {
        return $this->hasMany(Penilaian:class, 'mesyuarat_id', 'id');
    }

    public function permohonan()
    {
        return $this->belongsTo(Permohonan:class, 'permohonan_id', 'id');
    }
}

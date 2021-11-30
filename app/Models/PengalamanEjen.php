<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanEjen extends Model
{
    use HasFactory;

    protected $table ='table_pengalaman_ejen';

    public function pengalamanEjen()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
    
}

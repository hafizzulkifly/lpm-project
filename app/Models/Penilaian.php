<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table ='table_penilaian';

    public function mesyuarat()
    {                           //model         //fk       //pk
        return $this->belongsTo(Mesyuarat::all, 'mesyuarat_id','id'); //1 user ada byk pengalaman ejen
        
    }

}

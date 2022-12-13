<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = ['id_absensi'];
    protected $primaryKey = 'id_absensi';
    public function siswa(){
        return $this->belongsTo(Siswa::class,'id_siswa','id_siswa');
    }

    protected $casts = [
        'tanggal' => 'datetime:d-m-Y'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function absensis()
    {
        return $this->hasMany(Absensi::class, 'id_siswa');
    }

    protected $primaryKey = 'id_siswa';
    protected $casts = [
        'tanggal' => 'datetime:d-m-Y'
    ];
}

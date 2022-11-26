<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function absensis(){
        return $this->hasMany(Absensi::class);
    }


    protected $casts = [
    'tanggal' => 'datetime:d-m-Y'];
}

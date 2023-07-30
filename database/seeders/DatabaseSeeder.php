<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Siswa::factory()->count(44)->create();
        User::create([
            'username' => 'admin',
            'nama' => 'Admin',
            'password' => bcrypt('admin')
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => Carbon::now()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        $carbon = Carbon::now();
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => $carbon->addMonth()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => $carbon->addMonth()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => rand(1, 44),
            'tanggal' => $carbon->addMonth()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => $carbon->addDays(1)->format('Y/m/d'),
            'keterangan' => 'Alfa'
        ]);
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => $carbon->addDays(2)->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => $carbon->addDays(3)->format('Y/m/d'),
            'keterangan' => 'Alfa'
        ]);
        Absensi::create([
            'id_siswa' => 2,
            'tanggal' => $carbon->addDays(3)->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

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

        Siswa::create([
            'nama' => 'Adi Putra Ramadhan'
        ]);
        Siswa::create([
            'nama' => 'Adi Saputra'
        ]);
        Siswa::create([
            'nama' => 'Agam Suteguh'
        ]);
        Siswa::create([
            'nama' => 'Albert Einstein'
        ]);
        Siswa::create([
            'nama' => 'Alendra Vereno Alfarel'
        ]);
        Siswa::create([
            'nama' => 'Alvin Jeprando Barimbing'
        ]);
        Siswa::create([
            'nama' => 'Amelia Safitri'
        ]);
        Siswa::create([
            'nama' => 'Andini Novitasari'
        ]);
        Siswa::create([
            'nama' => 'Angger Cakra Wicaksono'
        ]);
        Siswa::create([
            'nama' => 'Aninda Fitri Litasni'
        ]);
        Siswa::create([
            'nama' => 'Aufa Ramadhan'
        ]);
        Siswa::create([
            'nama' => 'Bryant Sulthan Nugroho'
        ]);
        Siswa::create([
            'nama' => 'Daffa Al Baihaqi Haris Lubis'
        ]);
        Siswa::create([
            'nama' => 'Destuty Angeli Lase'
        ]);
        Siswa::create([
            'nama' => 'Dimas Abidin'
        ]);
        Siswa::create([
            'nama' => 'Doni Irawan'
        ]);
        Siswa::create([
            'nama' => 'Fardan Septian'
        ]);
        Siswa::create([
            'nama' => 'Farid Mardan Aziz'
        ]);
        Siswa::create([
            'nama' => 'Fauzan Gusdani Dwi Nanda'
        ]);
        Siswa::create([
            'nama' => 'Fina Dwi Ariyani'
        ]);
        Siswa::create([
            'nama' => 'Firenze Higa Putra'
        ]);
        Siswa::create([
            'nama' => 'Haikal Prasetya Al Hakim'
        ]);
        Siswa::create([
            'nama' => 'Hersa Putri Fernanda'
        ]);
        Siswa::create([
            'nama' => 'Jonathan Pandu'
        ]);
        Siswa::create([
            'nama' => 'Leny Nur Sila'
        ]);
        Siswa::create([
            'nama' => 'Meida Nur Afifah'
        ]);
        Siswa::create([
            'nama' => 'Mirza Elfandi'
        ]);
        Siswa::create([
            'nama' => 'Muhammad Suratman'
        ]);
        Siswa::create([
            'nama' => 'Muhammad Fathan Al Mufti'
        ]);
        Siswa::create([
            'nama' => 'Muhammad Refansa Ali Muzki'
        ]);
        Siswa::create([
            'nama' => 'Oni Cahyo Oktaviano'
        ]);
        Siswa::create([
            'nama' => 'Raflie Asfar Yasin'
        ]);
        Siswa::create([
            'nama' => 'Raihan Hakim'
        ]);
        Siswa::create([
            'nama' => 'Raju Yadera'
        ]);
        Siswa::create([
            'nama' => 'Rakhmawati'
        ]);
        Siswa::create([
            'nama' => 'Rifki Ihza Fathoni'
        ]);
        Siswa::create([
            'nama' => 'Rutsiana Marintan Munte'
        ]);
        Siswa::create([
            'nama' => 'Robby Akhsan'
        ]);
        Siswa::create([
            'nama' => 'Satria Rangga Putra Rizky'
        ]);
        Siswa::create([
            'nama' => 'Simon Rudy Hasibuan'
        ]);
        Siswa::create([
            'nama' => 'Thoriq AlFarabi Permana'
        ]);
        Siswa::create([
            'nama' => 'Tri Anjani Amanah'
        ]);
        Siswa::create([
            'nama' => 'Wahyu Eka Saputra'
        ]);
        Siswa::create([
            'nama' => 'Wawan Badru Tamam'
        ]);
        User::create([
            'username' => 'admin',
            'nama' => 'Admin',
            'password' => bcrypt('admin1')
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::yesterday()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::now()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::now()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => Carbon::now()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
    }
}

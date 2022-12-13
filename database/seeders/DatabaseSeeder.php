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

        Siswa::create([
            'nama' => 'Adi Putra Ramadhan',
            'email' => "adiputra@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Adi Saputra',
            'email' => "adisaput@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Agam Suteguh',
            'email' => "agam@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Albert Einstein',
            'email' => "albert@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Alendra Vereno Alfarel',
            'email' => "farel@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Alvin Jeprando Barimbing',
            'email' => "alvin@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Amelia Safitri',
            'email' => "amel@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Andini Novitasari',
            'email' => "andini@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Angger Cakra Wicaksono',
            'email' => "anggera@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Aninda Fitri Litasni',
            'email' => "anin@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Aufa Ramadhan',
            'email' => "aufa@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Bryant Sulthan Nugroho',
            'email' => "bry@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Daffa Al Baihaqi Haris Lubis',
            'email' => "daffa@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Destuty Angeli Lase',
            'email' => "tuti@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Dimas Abidin',
            'email' => "dimas@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Doni Irawan',
            'email' => "doni@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Fardan Septian',
            'email' => "fardan@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Farid Mardan Aziz',
            'email' => "farid@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Fauzan Gusdani Dwi Nanda',
            'email' => "fauzan@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Fina Dwi Ariyani',
            'email' => "fina@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Firenze Higa Putra',
            'email' => "firenze@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Haikal Prasetya Al Hakim',
            'email' => "haikal@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Hersa Putri Fernanda',
            'email' => "hersa@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Jonathan Pandu',
            'email' => "pandu@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Leny Nur Sila',
            'email' => "lenyy@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Meida Nur Afifah',
            'email' => "meida@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Mirza Elfandi',
            'email' => "pandi@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Muhammad Suratman',
            'email' => "suratman@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Muhammad Fathan Al Mufti',
            'email' => "mufthi@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Muhammad Refansa Ali Muzki',
            'email' => "refan@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Oni Cahyo Oktaviano',
            'email' => "oni@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Raflie Asfar Yasin',
            'email' => "raflie@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Raihan Hakim',
            'email' => "raih@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Raju Yadera',
            'email' => "raju@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Rakhmawati',
            'email' => "rakhma@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Rifki Ihza Fathoni',
            'email' => "kiki@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Rutsiana Marintan Munte',
            'email' => "ruts@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Robby Akhsan',
            'email' => "robb@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Satria Rangga Putra Rizky',
            'email' => "satria@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Simon Rudy Hasibuan',
            'email' => "simon@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Thoriq AlFarabi Permana',
            'email' => "thoriq@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Tri Anjani Amanah',
            'email' => "anjani@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Wahyu Eka Saputra',
            'email' => "wahyu@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        Siswa::create([
            'nama' => 'Wawan Badru Tamam',
            'email' => "wawan@gmail.com",
            'notelp' => 0 . mt_rand(8000000000,8999999999),
            'alamat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.'
        ]);
        User::create([
            'username' => 'admin',
            'nama' => 'Admin',
            'password' => bcrypt('admin1')
        ]);
        User::create([
            'username' => 'angger',
            'nama' => 'Angger Cakra',
            'password' => bcrypt('admin1')
        ]);
        User::create([
            'username' => 'cakra',
            'nama' => 'Cakra',
            'password' => bcrypt('admin1')
        ]);
        User::create([
            'username' => 'wicak',
            'nama' => 'Wicak',
            'password' => bcrypt('admin1')
        ]);
        User::create([
            'username' => 'sono',
            'nama' => 'Sono',
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
            'tanggal' => Carbon::now()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        $carbon = Carbon::now();
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => $carbon->addMonth()->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => $carbon->addMonth()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => rand(1,44),
            'tanggal' => $carbon->addMonth()->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => $carbon->addDays(1)->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => $carbon->addDays(2)->format('Y/m/d'),
            'keterangan' => 'Ijin'
        ]);
        Absensi::create([
            'id_siswa' => 1,
            'tanggal' => $carbon->addDays(3)->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
        Absensi::create([
            'id_siswa' => 2,
            'tanggal' => $carbon->addDays(3)->format('Y/m/d'),
            'keterangan' => 'Sakit'
        ]);
    }
}

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Pengenalan Konsep Aplikasi
Project absensi adalah website absensi siswa kelas. Melalui project ini, Guru atau wali kelas tidak perlu cape cape membuat laporan manual kehadiran siswa dikelas.

## Authentikasi 
Aplikasi ini menyediakan 1 role berikut :
### Admin
Admin dapat membuat, mengedit dan menghapus data.
- Username : admin
- Password : admin (same as username)

## Setting UP
Menyiapkan dan mensetting project absensi-app (laravel 9) require (Composer v2.2.4 ,Git, MYSQL PHP > v5 (v8.1.1))
- Buka CMD atau Aplikasi Command lainnya
- Masuk ke Directory apa saja untuk menyiapkan folder project. Contoh (cd C:\xampp\htdocs)
- Download / Clone Project ini dengan cara git clone https://github.com/Cakraawala/absensi-app.git atau dengan mendownload langsung file zip dan pindahkan ke directory yang telah disiapkan.
- Setelah project berhasil di download ekstrak jika file berupa zip, lalu ketikan Composer install di CMD dan tunggu hingga selesai diunduh.
- Buat database MYSQL dan Buka project absensi-app, Cari file dengan nama .envexample kemudian edit nama file tersebut menjadi .env dan buka file tersebut.
- Setelah file dibuka, Ubah Database_name dan lainnya sesuai dengan database yang baru dibuat.
- Buka CMD kembali Ketik php artisan key:generate dan php artisan migrate --seed / php artisan migrate:fresh --seed. Setelah data berhasil di dapatkan lalu jalankan Project dengan PHP ARTISAN SERVE.
- Project Berhasil DiClone.

## Asset Foto
![dashboard](https://user-images.githubusercontent.com/97875134/257035445-33c0820d-35d2-4c26-afec-116ee1353653.PNG)
![absen](https://user-images.githubusercontent.com/97875134/257035447-dc771715-68cd-4d43-a14f-238d638dcb4b.PNG)
![datasiswa](https://user-images.githubusercontent.com/97875134/257035453-55a54779-7c0e-43bf-8ef0-1ca5594f0c69.PNG)
![tambahsiswa](https://user-images.githubusercontent.com/97875134/257035458-06df4329-ec23-4bd4-a596-d75772b60df8.PNG)
![laporan](https://user-images.githubusercontent.com/97875134/257035459-d7c8ac5e-3eb6-4275-9d67-3c887451db60.PNG)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
The Asset image (image room) is not mine, its free source image on google.

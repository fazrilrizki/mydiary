MyDiary
==================

Sebuah aplikasi jurnal/diary pribadi yang aman, minimalis, dan modern. Proyek ini dibangun untuk menyediakan tempat pribadi bagi pengguna untuk mencatat pemikiran, perasaan, dan kenangan harian mereka.

PERSYARATAN SISTEM
------------------

Sebelum Anda memulai, pastikan Anda telah menginstal hal-hal berikut di sistem Anda:

* PHP (Versi yang direkomendasikan untuk versi Laravel Anda, misal: 8.1+)
* Composer
* MySQL atau database lain yang didukung Laravel
* Node.js & npm (Jika Anda menggunakan Laravel Mix/Vite)

INSTALASI LOKAL
---------------

Ikuti langkah-langkah di bawah ini untuk mengatur proyek secara lokal:

1. Klon Repositori

   git clone https://github.com/fazrilrizki/mydiary.git
   cd mydiary

2. Instal Dependensi PHP

   Gunakan Composer untuk menginstal semua dependensi PHP yang diperlukan:
   composer install

3. Konfigurasi Lingkungan

   * Duplikat file konfigurasi .env.example menjadi .env.
     cp .env.example .env

   * Edit file .env dan atur detail koneksi database Anda (DB_DATABASE, DB_USERNAME, DB_PASSWORD, dll.).

4. Buat Kunci Aplikasi

   Laravel membutuhkan kunci aplikasi unik.
   php artisan key:generate

5. Migrasi dan Seeder Database

   Jalankan migrasi untuk membuat tabel di database Anda, dan jalankan seeder (jika ada) untuk mengisi data awal.
   php artisan migrate --seed

   Catatan: Jika Anda tidak memiliki seeder, cukup jalankan php artisan migrate.

6. Instal dan Kompilasi Aset Frontend (Opsional)

   Jika proyek Anda menggunakan asset seperti CSS/JavaScript:
   npm install
   npm run dev

7. Jalankan Server Lokal

   Anda dapat menjalankan server pengembangan Laravel bawaan:
   php artisan serve

   Aplikasi sekarang harus dapat diakses di http://127.0.0.1:8000.

KONTRIBUSI
-----------

Kontribusi disambut baik! Jika Anda memiliki saran atau menemukan bug, silakan buka issue baru atau kirim Pull Request (PR).

1. Fork repositori ini.
2. Buat branch fitur Anda (git checkout -b feature/NamaFiturBaru).
3. Commit perubahan Anda (git commit -m 'Tambahkan Fitur Baru').
4. Push ke branch (git push origin feature/NamaFiturBaru).
5. Buka Pull Request baru.

LISENSI
-------

Proyek ini dilisensikan di bawah MIT License. Lihat file LICENSE.md untuk detailnya.

KONTAK
------

* Fazril Rizki Tanto Adji - fazrilrizkitantoadji@gmail.com
* Link Proyek: https://github.com/fazrilrizki/mydiary
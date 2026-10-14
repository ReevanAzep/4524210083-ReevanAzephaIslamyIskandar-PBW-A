# 📘 Laporan Praktikum Pertemuan Ke-5

**Nama:** Reevan Azepha Islamy Iskandar  
**NIM:** 4524210083  
**Mata Kuliah:** Pemrograman Berbasis Web (PBW)

# 🏫 LaraPress — Website Informasi

LaraPress adalah aplikasi website berbasis Laravel yang dikembangkan sebagai proyek praktikum Pemrograman Berbasis Web. Website ini menyediakan beberapa halaman informasi, yaitu halaman utama, halaman tentang kami, dan halaman kontak. Aplikasi dirancang dengan tampilan modern, navigasi sederhana, serta desain responsif agar nyaman digunakan oleh pengunjung.

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2">
  <img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 12">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind CSS 4">
  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite">
</p>

## 📋 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Utama](#-fitur-utama)
- [Tech Stack](#-tech-stack)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Penggunaan](#-penggunaan)
- [Struktur Project](#-struktur-project)
- [Pengembangan](#-pengembangan)
- [Testing](#-testing)
- [Penutup](#-penutup)

## 🎯 Tentang Aplikasi

LaraPress merupakan website informasi sederhana yang dibangun menggunakan framework Laravel 12 dan bahasa pemrograman PHP. Proyek ini bertujuan untuk menerapkan konsep dasar pengembangan aplikasi web, mulai dari pengaturan routing, pembuatan halaman menggunakan Blade Template, pengelolaan aset frontend, hingga menjalankan aplikasi melalui server lokal.

Website ini menggunakan desain bernuansa ungu dengan tata letak yang sederhana dan navigasi ant halaman untuk memudahkan pengunjung mengakses informasi.

### Halaman Website

1. **Halaman Home** — Halaman utama yang berisi sambutan dan informasi pengenalan website.
2. **Halaman Tentang Kami** — Menampilkan informasi mengenai website dan bagian-bagian pendukungnya.
3. **Halaman Kontak** — Menyediakan halaman informasi kontak yang dapat digunakan pengunjung untuk mengenal informasi kontak yang ditampilkan pada website.

## ✨ Fitur Utama

- 🏠 **Halaman Utama** — Menampilkan informasi pengenalan website.
- ℹ️ **Tentang Kami** — Menyediakan informasi mengenai website.
- 📞 **Halaman Kontak** — Menampilkan informasi kontak.
- 🧭 **Navigasi Antarhalaman** — Memudahkan pengunjung berpindah dari satu halaman ke halaman lainnya.
- 🎨 **Modern UI/UX** — Menggunakan kombinasi warna ungu, kartu informasi, dan tata letak yang rapi.
- 📱 **Desain Responsif** — Tata letak dirancang agar dapat menyesuaikan ukuran layar.
- ⚙️ **Laravel Routing** — Mengatur alamat URL untuk setiap halaman.
- 🗄️ **Dukungan Database MySQL** — Menyediakan konfigurasi database untuk pengembangan lokal.

## 🛠️ Tech Stack

### Backend

- **PHP 8.2+** — Bahasa pemrograman backend.
- **Laravel 12.x** — Framework untuk pengembangan aplikasi web.
- **Eloquent ORM** — Fasilitas Laravel untuk berinteraksi dengan database.

### Frontend

- **Blade Template** — Template engine bawaan Laravel.
- **Tailwind CSS 4.x** — Framework CSS untuk styling antarmuka.
- **Vite 7.x** — Build tool untuk pengelolaan aset frontend.
- **JavaScript** — Mendukung kebutuhan interaksi frontend.

### Database

- **MySQL** — Database relasional yang dikonfigurasi untuk lingkungan pengembangan.

### Development Tools

- **Composer** — Pengelola dependensi PHP.
- **Node.js dan npm** — Pengelola dependensi serta proses build frontend.
- **PHP Artisan** — CLI untuk menjalankan berbagai perintah Laravel.
- **PHPUnit** — Framework pengujian yang tersedia dalam konfigurasi proyek.

## 💻 Persyaratan Sistem

Pastikan perangkat sudah memiliki perangkat lunak berikut sebelum menjalankan aplikasi:

- PHP versi 8.2 atau lebih baru.
- Composer.
- Node.js dan npm.
- Git (jika melakukan clone repository).
- SQLite, jika menggunakan database SQLite.

Periksa instalasi melalui terminal:

```bash
php -v
composer -V
node -v
npm -v
git --version
```

## 🚀 Instalasi

### 1. Clone Repository

Ganti URL berikut dengan URL repository GitHub milik kamu.

```bash
git clone https://github.com/USERNAME/NAMA-REPOSITORY.git
```

Masuk ke folder proyek Laravel:

```bash
cd NAMA-REPOSITORY/LaraPress
```

Sesuaikan nama folder dengan struktur repository yang sudah diunduh.

### 2. Install Dependencies

Install dependensi PHP menggunakan Composer:

```bash
composer install
```

Install dependensi frontend menggunakan npm:

```bash
npm install
```

### 3. Setup Environment

Salin file konfigurasi environment:

```bash
cp .env.example .env
```

Jika menggunakan Windows Command Prompt dan perintah `cp` tidak tersedia, gunakan:

```cmd
copy .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 4. Setup Database

Pastikan konfigurasi database pada file `.env` sesuai dengan database yang digunakan. Untuk SQLite, konfigurasi dapat menggunakan:

```env
DB_CONNECTION=sqlite
```

Pastikan file database tersedia pada lokasi `database/database.sqlite`. Jika belum tersedia, buat file tersebut terlebih dahulu.

Jalankan migrasi database:

```bash
php artisan migrate
```

### 5. Build Assets

Untuk menjalankan proses pengembangan frontend:

```bash
npm run dev
```

Untuk membangun aset frontend versi produksi:

```bash
npm run build
```

### 6. Jalankan Aplikasi

Buka terminal dan jalankan:

```bash
php artisan serve
```

Aplikasi dapat diakses melalui alamat:

**http://127.0.0.1:8000**

Jika ingin menjalankan server Laravel dan Vite secara bersamaan, buka dua terminal terpisah. Jalankan `php artisan serve` pada terminal pertama dan `npm run dev` pada terminal kedua.

## 🌐 Penggunaan

Setelah aplikasi berhasil dijalankan, buka browser dan kunjungi alamat berikut:

| Halaman | URL |
|---|---|
| Home | `http://127.0.0.1:8000/` |
| Tentang Kami | `http://127.0.0.1:8000/tentang-kami` |
| Kontak | `http://127.0.0.1:8000/kontak` |

Pengunjung dapat membuka setiap halaman melalui navigasi yang tersedia pada website.

## 📂 Struktur Project

Berikut struktur direktori utama proyek LaraPress:

```text
LaraPress/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   ├── seeders/
│   └── database.sqlite
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── welcome.blade.php
│       ├── about.blade.php
│       └── kontak.blade.php
├── routes/
│   ├── web.php
│   └── console.php
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

**Keterangan direktori:**

- `app/` — Berisi komponen utama aplikasi Laravel.
- `app/Models/` — Berisi model untuk merepresentasikan data.
- `app/Http/Controllers/` — Lokasi controller untuk menangani permintaan HTTP.
- `resources/views/` — Berisi halaman website menggunakan Blade Template.
- `resources/css/` dan `resources/js/` — Berisi aset frontend.
- `routes/web.php` — Mendefinisikan rute halaman website.
- `database/` — Berisi file database, migrasi, factory, dan seeder.
- `public/` — Direktori publik yang menjadi titik masuk aplikasi web.
- `tests/` — Lokasi pengujian aplikasi.

## 🧑‍💻 Pengembangan

Proyek ini dapat dikembangkan lebih lanjut dengan menambahkan beberapa fitur, seperti:

- Formulir kontak yang dapat menyimpan pesan pengunjung.
- Halaman admin untuk mengelola konten website.
- Sistem login dan autentikasi pengguna.
- Pengelolaan informasi website melalui database.
- Validasi formulir dan penanganan kesalahan.
- Pengujian otomatis untuk memastikan fungsi aplikasi berjalan dengan baik.

Pengembangan selanjutnya dapat dilakukan dengan memanfaatkan routing, controller, model, migration, dan Blade Template yang disediakan Laravel.

## 🧪 Testing

Laravel menyediakan fasilitas pengujian otomatis yang dapat digunakan untuk memeriksa fungsi aplikasi.

Untuk menjalankan pengujian:

```bash
php artisan test
```

Pengujian dapat dikembangkan untuk memeriksa:

- Akses halaman Home.
- Akses halaman Tentang Kami.
- Akses halaman Kontak.
- Respons aplikasi terhadap URL yang tidak ditemukan.
- Validasi dan fungsi tambahan apabila fitur baru sudah diterapkan.

Hasil pengujian perlu diperiksa setelah perintah dijalankan untuk memastikan aplikasi berjalan sesuai harapan.

## 📄 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan praktikum Pemrograman Berbasis Web. Penggunaan dan distribusi kode mengikuti ketentuan lisensi yang ditetapkan pada repository.

---

<p align="center">
  <b>Dibuat dengan ❤️ menggunakan Laravel</b>
  <br>
  <i>Proyek Praktikum Pemrograman Berbasis Web</i>
</p>

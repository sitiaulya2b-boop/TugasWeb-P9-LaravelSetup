
# TugasWeb-P9-LaravelSetup

Proyek ini dibuat untuk memenuhi **Tugas Rutin Pertemuan 9 — Setup Laravel**.
Proyek ini mencakup instalasi Laravel, konfigurasi database, routing, Blade views, serta penggunaan Controller dan Model.

## ✨ Fitur & Requirement

- [X] Instalasi Laravel via Composer
- [X] Konfigurasi Database (MySQL)
- [X] 3 Custom Routes (`/`, `/about`, `/contact`) yang me-return Blade View
- [X] View menampilkan data dinamis (array dari route)
- [X] Penggunaan `make:controller` dan `make:model -m`
- [X] **Bonus:** Styling dengan Tailwind CDN & Route Parameter (`/hello/{nama}`)

---

## 🛠️ Langkah Install & Menjalankan Project

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal:

1. **Clone repository ini:**

   ```bash
   git clone https://github.com/sitiaulya2b-boop/TugasWeb-P9-LaravelSetup.git
   cd TugasWeb-P9-LaravelSetup
   ```
2. **Install semua dependencies menggunakan Composer:**

   ```bash
   composer install
   ```
3. **Salin file environment dan generate application key:**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Konfigurasi Database:**

   - Buat database baru di phpMyAdmin dengan nama `tugas_p9`.
   - Buka file `.env`, lalu sesuaikan konfigurasi database berikut:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=tugas_p9
     DB_USERNAME=root
     DB_PASSWORD=
     ```
5. **Jalankan migrasi database:**

   ```bash
   php artisan migrate
   ```
6. **Jalankan server lokal:**

   ```bash
   php artisan serve
   ```

   Buka browser dan akses aplikasi di: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📂 Penjelasan Struktur Folder

Berikut adalah penjelasan struktur folder dan file penting dalam proyek Laravel ini:

| Folder / File             | Keterangan                                                                                                                         |
| :------------------------ | :--------------------------------------------------------------------------------------------------------------------------------- |
| `app/Http/Controllers/` | Berisi file Controller (contoh:`ArtikelController.php`) yang berfungsi untuk menangani logika dan permintaan HTTP.               |
| `app/Models/`           | Berisi file Model Eloquent (contoh:`Artikel.php`) yang digunakan untuk berinteraksi dan mengambil data dari tabel database.      |
| `database/migrations/`  | Berisi file skema database (blueprint) untuk membuat dan memodifikasi tabel secara otomatis (versi kontrol database).              |
| `resources/views/`      | Berisi file template Blade (`.blade.php`) seperti `home`, `about`, `contact`, dan `hello` untuk tampilan antarmuka (UI). |
| `routes/web.php`        | File utama untuk mendefinisikan semua route (URL) aplikasi web dan menghubungkannya dengan Controller atau View.                   |
| `.env`                  | File konfigurasi environment yang menyimpan pengaturan sensitif seperti kredensial database dan App Key.                           |
| `public/`               | Folder root yang diakses oleh server web, berisi`index.php` sebagai entry point aplikasi.                                        |
| `composer.json`         | File yang mendefinisikan dependencies (paket) PHP yang dibutuhkan oleh proyek ini.                                                 |

---

## 👤 Penulis

Dibuat oleh: **[Nama Kamu]**
NIM: **[NIM Kamu]**
Mata Kuliah: Pemrograman Web

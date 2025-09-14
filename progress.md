## Jum'at 15 Agustus 2025 - Register dan Login

Link Dokumentasi :

-   https://laravel.com/docs/11.x/verification#main-content.

-   https://laravel.com/docs/11.x/installation.

-   https://laravel.com/starter-kits

### 1. Membuat laravel baru menggunakan laravel new

```bash
laravel new example-app
```

### 2. Menambahkan laravel breeze

```bash
composer require laravel/breeze --dev
```

Selanjutnya

```bash
# Pilih blade dan sisanya default aja
php artisan breeze:install
```

```bash
# migrate ulang data nya
php artisan migrate:fresh
```

```bash
# untuk mengupdate tailwind nya ke versi 4
# kalau misal endak bisa tambahin --force
# jika sudah berhasil terinstall file tailwind config nya enggak ada
npx @tailwindcss/upgrade --force
```

```bash
# buat hapus file postcss nya
npm uninstall postcss
```

### 3. Menjalankan browser nya nanti ada tombol login dan register

```bash
composer run dev
```

### 4. Bisa melakukan register dan data nya disimpen di tabel user di tableplus

Note : jangan lupa masukin database sqlite nya ke tableplus yang baru ini.

Buat apa ? buat ngeliat data atau tabel dari laravel baru kita.

Karena kita akan membuat register dan login untuk mengelola post atau blog nantinya.

### 5. Membuat akun gmail baru bertujuan untuk mengirim email untuk verifikasi

To send emails using Gmail's SMTP server, you'll need to configure your email client or application with the following settings: SMTP Server: smtp.gmail.com. Port: 465 (SSL) or 587 (TLS). Username: Your full Gmail address (e.g., example@gmail.com). Password: Your Gmail password, or an app password if you have two-factor authentication enabled.
Here's a breakdown of the settings:
SMTP Server: smtp.gmail.com.
Port:
465 (SSL).
587 (TLS).
Username: Your full Gmail address (e.g., example@gmail.com).
Password: Your Gmail password or an app password.
Authentication: Required, typically using your Gmail credentials or an app password.
Secure Connection: Required, either SSL (port 465) or TLS (port 587).

### 6. Jumat, 22 Agustus 2025 - Bug atau typo di LoginRequest.php

### 7. Senin, 25 Agustus 2025 - Penambahan dan Penggabungan Kode

1. Menambahkan skema username unique di create users table di migrasi.

2. Nambahin tampilan UI register untuk input username di register blade di views auth.

3. nambahin fillable username di app models User.php

4. nambahin username dll di RegisteredUserController di app controllers auth

5. kita menambahkan UI input email or username di login blade php dari views auth.

6. tambahin beberapa di LoginRequest.php app http request auth

7. Menambahkan UI edit username pada saat user sudah login. berada di bagian profile views dan di folder partials dan di file update profile information php.

8. Mengubah beberapa di folder request dari app. ProfileUpdateRequest.php

9. Melakukan penggabungan file belajar laravel dengan web blog.

10. Jika sudah install beberapa lagi ya karena kita sempet melakukan copy oleh file sebelumnya.

-   install flowbite

```bash
npm install -D flowbite flowbite-typography
```

-   membersihkan cache dan compile ulang view di terminal

```bash
1. php artisan cache:clear

2. php artisan view:clear
```

-   memuat ulang seeder dan factory untuk database

```bash
php artisan migrate:fresh --seed
```

11. Memperbaiki navbar halaman post D:\laragon\www\belajar-laravel\web-blog\resources\views\components\navbar.blade.php

12. membuat semisal user belum login ada tombol login saja di navbar.

### 8. Jumat, 12 September Update Controller (CRUD)

1. Dokumentasi Controller : https://laravel.com/docs/12.x/controllers#main-content

2. php artisan make:controller PostDashboardController - Membuat Controller baru di cmd

3. Untuk Menangani semua resource controller : https://laravel.com/docs/12.x/controllers#resource-controllers

4. php artisan make:controller PostDashboardController --resource di cmd

5. Update on : D:\laragon\www\1. web-blog\app\Http\Controllers\PostDashboardController.php

6. Update on : D:\laragon\www\1. web-blog\resources\views\dashboard.blade.php

7. Update on : D:\laragon\www\1. web-blog\routes\web.php

8 Menambahkan UI untuk tampilan post dashboard menggunakan flowbite : https://learn.wpucourse.id/member/course/SkDQxGYr445D0DwVd1soz/4/8

9. Buat folder baru untuk komponen UI dashboard post : D:\laragon\www\1. web-blog\resources\views\components\posts

10. nambah crud layouts dari flowbite : resources\views\components\posts\table.blade.php

### 9. Minggu, 14 September 2025 - lanjutin selesain crud

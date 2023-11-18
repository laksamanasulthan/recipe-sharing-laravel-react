
![Screenshot Capture - 2023-11-18 - 21-50-25](https://github.com/laksamanasulthan/recipe-sharing-laravel-react/assets/92253988/2c6f3944-dd63-4b8a-b03d-b9900f6d5efa)

# Recipe Sharing Laravel + Inertia.js + React.js

Merupakan Aplikasi Sharing Resep/Recipe Sharing, yang dikembangkan dengan menggunakan Arsitektur Modern Monolith. [Modern Monolith Definition](https://inertiajs.com/). Techstack yang digunakan didalam aplikasi ini berupa PHP 8.2, Laravel 10, Node.js 18.14, Inertia.js 1.0.0, React.js 18

### Pre-Requisite ###
`Pastikan Versi PHP MINIMAL 8.2 dan Versi Node.js MINIMAL 18.14`

### Installation ###

01. Jalankan perintah dibawah untuk mengundug vendor/module dari laravel
```
composer install
```

02. Dilanjutkan dengan mengunduh Node_modules untuk menjalankan Inertia.js dan React.js
```
npm install
```

03. Copy env.example kemudian hilangkan '.example'-nya. Setelah menjadi file .env, silahkan kostumisasi port dan db sesuai dengan keinginan


04. Generate Artisan Key
```
php artisan key:generate
```

## Seeding dan Migration

05. Proses dilanjutkan dengan Migrasi dan Seeding
```
php artisan migrate --seed
```

`   WARN  The database 'recipe-laravel-react-testing' does not exist on the 'mysql' connection.

  Would you like to create it? (yes/no) [no]
❯ yes
`


## Login dan Testing 

05. Proses Selanjutnya adalah menjalankan aplikasi, kita mulai dengan menjalankan Vite server, untuk melakukan
build pada Inertia dan React
```
npm run dev
```

06. Dilanjutkan dengan menjalankan server laravel
```
php artisan serve
```

07. Setelah Migrasi selesai dan Data Ter-seeding, pengguna dapat Login atau Registrasi Akun Baru,
Berikut adalah akun yang sudah disediakan untuk mockup
*	`email : test@example.com`
*	`password : testing123`

Selamat Program Berhasil Dijalankan!


## Overview

![SharedScreenshotx](https://github.com/laksamanasulthan/recipe-sharing-laravel-react/assets/92253988/d5ce89c0-17e0-4513-9afd-ee52a322f5e7)

1. Database Schema, dengan 5 table, dan 5 relasi
2. Authentication dengan menggunkan Session Database
3. Modern Monolith 

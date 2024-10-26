# Project Happy Manager
#### Author: Herrys Aghista Rachman
#### Since: 13 Apr 2024
#### Description: This script is designed to manage a project's code and all its need to make a web easier.
#### Requirment: Dev nya pake laravel 11 , ga tau kalo package nya bisa di pake di versi berapa aja, harusnya laravel 7++ bisa sih (soon check)
#### Note: Masih cuma instalasi general doang ye, belum update euy

## fitur

1. merapikan dir dan file
2. mempermudah tracking file jika prject skala besar
3. mempermudah ketika membuat modul baru (basic CRUD)
4. menjadikan SOP code tidak berubah dan konsisten


## instalasi (kalo download package nya by external)

1. composer.json ditambahkan
```
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/",
            "Happymanager\\": "app/test/DataControl/",
            "Util\\": "app/test/Util/"
        }
    },
```
2. masukkan file `HappyManager.php` ke app\Console\Commands (berlaku untuk template lainnya jika ada update nantinya)

## cara menggunakan secara general (untuk instalasi)

1. jalankan `php artisan happy:install` (dalam progres register, sementara download manual aja lewat github)
2. jalankan `php artisan make:HappyManager NamaPackageYangDiinginkan` (jalankan cukup 1 kali sebagai inisialisasi) 

### cara menggunakan secara spesifik (in progress)

1. jalankan `php artisan make:c/r/u/d NamaModul/NamaFileYangDiinginkan -a` (-a untuk all, opsional)
- contoh: produk/produk -a , akan terbuat dir produk di dir C R U D dengan isian file C/R/U/Dproduk dan
- jika menggunakan -a , akan terbuat juga routes nya, jadi bisa langsung di test 127.0.0.1:8000/produk
- check loaded class nya di {localhost:8000}/check-class-loaded (biasanya kalo habis di add perlu `composer dump-autoload` trus `php artisan optimize`, soon ku tambahin sekalian kalo -a langsung jalanin 2 command itu)

## incoming feature (kalo ga males)

1. add command buat method/function dalam class untuk beberapa hal umum (menggunakan template yg nanti di comment agar bisa disesuaikan sendiri)
2. add command buat membuat model dengan beberapa field umum (id, nama, deskripsi)
3. add command buat membuat controller dengan beberapa method umum (index, show, store, ...)
4. add command buat membuat migration dengan beberapa field umum (id, nama, deskripsi, ...)
5. add command buat membuat seeder dengan beberapa field umum (id, nama, desk, ...)
6. add command buat session dan pemanggilan objek yg akan sering digunakan
7. add command buat add config
8. add command buat template front end dengan berbagai macam framework JS (rencana react, vue, angular)
9. add command buat komponen front end umum (navbar, sidebar, header, footer)
10. add command buat komponen sederhana (table, chart, form)
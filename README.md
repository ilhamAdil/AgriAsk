# AgriAsk

<ul>
    <li> Pararel            : P1 </li>
    <li> Kelompok           : 5 </li>
</ul>

Asisten Praktikum :
| Nama | NIM |
| ---- | --- |
| Indah Puspita | G64170035 |
| Qoriatul Khairunnisa | G64170014 |

## Anggota Kelompok dan Masing-Masing Role

| Nama                      | NIM       | ROLE                                 |
| ------------------------- | --------- | ------------------------------------ |
| Muhammad Ilham Fadillah   | G64190028 | Project Manager & Back-End Developer |
| I Dewa Putu Semadi        | G64190021 | Front-End Developer                  |
| Nisma Karmiahtun Fadilah  | G64190036 | UI Designer                          |
| Fryda Lucyana Permatasari | G64190015 | UX Researcher                        |

## Deskripsi Singkat Aplikasi

AgriAsk ini adalah sebuah website forum diskusi yang dikhususkan untuk kalangan atau komunitas petani modern. Petani atau user dapat mengajukan pertanyaan yang berkaitan tentang pertanian. Nantinya, user lain yang sekiranya memiliki ilmu yang lebih baik tentang pertanian, dapat menjawab pertanyaan yang diajukan oleh user tersebut. Harapannya dengan website ini, dapat membantu petani/user untuk menjalankan kegiatan pertanian modernnya seperti hidroponik, aquaponik, dan sebagainya.

## User Analisis

### User Story

<ul>
    <li>Sebagai seorang petani, saya ingin berdiskusi dan bertanya mengenai pertanian dan teknologinya agar dapat menemukan solusi dari permasalahan saya. </li>
    <li>Sebagai seorang pengguna, saya ingin membuat akun dengan mendaftar menggunakan alamat email agar bisa mengakses website. </li>
    <li>Sebagai pengguna yang telah mendaftar, saya bisa memasukkan alamat email dan password untuk masuk ke website. </li>
    <li>Sebagai pengguna yang lupa dengan password, saya dapat memberikan informasi alamat email yang terdaftar pada website agar akun saya dapat digunakan kembali. </li>
    <li>Sebagai seorang masyarakat umum, saya ingin membantu petani dalam menunjang kegiatan pertanian berkelanjutan.</li>
    <li>Sebagai pengguna, saya ingin mendapatkan poin pada setiap jawaban yang saya jawab, agar mendapatkan reputasi dalam website.</li>
    <li>Sebagai seorang pengguna, saya ingin melihat statistik pengguna lain dalam penggunaan website, agar mengetahui sejauh mana saya telah menelusuri website.</li>
    <li> Sebagai seorang petani, saya ingin membantu menjawab pertanyaan agar petani lain dapat menemukan solusi dari permasalahan mereka.</li>
    <li>Sebagai seorang petani, saya ingin membuat postingan/artikel untuk membantu memberikan informasi terkait dengan pertanian dalam membantu petani lain melangsungkan kegiatan pertaniannya.</li>
    <li>Sebagai seorang masyarakat umum, saya dapat mencari informasi seputar pertanian agar menambah wawasan saya.</li>
</ul>

## Spesifikasi Teknis Lingkungan Pengembangan

### Software

<ul>
    <li> Database       : MySQL </li>
    <li> Server         : Apache </li>
    <li> Text Editor    : Visual Studio Code </li>
    <li> UI Design      : Figma </li>
</ul>

### Hardware

<ul>
    <li> Prosesor       : Acer Intel Core i3-8130U 2.20GHz </li>
    <li> Memori         : 8 GB DDR4 </li>
    <li> Graphic card   : NVIDIA GeForce MX150 2GB VRAM </li>
    <li> Storage        : HDD 1 TB </li>
</ul>

### Tech Stack

<ul>
    <li> Front-end       : HTML, CSS/SCSS/SASS, Bootstrap, Vanilla Javascript </li>
    <li> Back-end        : PHP, Laravel, NodeJS </li>
</ul>

### Lainnya

<ul>
    <li> Task Management : Github </li>
    <li> Software docs   : Google Slide </li>
    <li> Version control dan collaboration platform : Github </li>
</ul>

## Hasil dan Pembahasan

### Use Case Diagram

![use_case](https://user-images.githubusercontent.com/66185022/120827451-054ea480-c58e-11eb-8c5a-dcfc421e4e9c.png)

### Activity Diagram

### Class Diagram

### Entity Relationship Diagram (ERD)

![ERD](https://user-images.githubusercontent.com/66185022/120827582-2c0cdb00-c58e-11eb-80cf-1f8214348a99.png)

### Software Architecture

![Arsitektur_agriask](https://user-images.githubusercontent.com/66185022/120827674-4646b900-c58e-11eb-9487-049abc02a41a.png)

### Fungsi Utama yang Dikembangkan

### Fungsi CRUD

## Hasil Implementasi

Repositori ini dibangun dengan Laravel versi 6.02 ke atas. Lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

-   masuk ke direktori AgriAsk

```bash
$ cd AgriAsk
```

-   jalankan perintah composer install untuk mendownload direktori vendor

```bash
$ composer install
```

-   buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

-   jalankan perintah php artisan key generate

```bash
$ php artisan key:generate
```

-   Sesuaikan nama database, username dan password nya di file .env dengan database kalian.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<NAMA_DATABASE>
DB_USERNAME=root
DB_PASSWORD=
```

Jangan lupa untuk menjalankan server laravel

```bash
$ php artisan serve
```

Pastikan server Apache dan MySQL berjalan di XAMPP

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[British Software Development](https://www.britishsoftware.co)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   [UserInsights](https://userinsights.com)
-   [Fragrantica](https://www.fragrantica.com)
-   [SOFTonSOFA](https://softonsofa.com/)
-   [User10](https://user10.com)
-   [Soumettre.fr](https://soumettre.fr/)
-   [CodeBrisk](https://codebrisk.com)
-   [1Forge](https://1forge.com)
-   [TECPRESSO](https://tecpresso.co.jp/)
-   [Runtime Converter](http://runtimeconverter.com/)
-   [WebL'Agence](https://weblagence.com/)
-   [Invoice Ninja](https://www.invoiceninja.com)
-   [iMi digital](https://www.imi-digital.de/)
-   [Earthlink](https://www.earthlink.ro/)
-   [Steadfast Collective](https://steadfastcollective.com/)
-   [We Are The Robots Inc.](https://watr.mx/)
-   [Understand.io](https://www.understand.io/)
-   [Abdel Elrafa](https://abdelelrafa.com)
-   [Hyper Host](https://hyper.host)
-   [Appoly](https://www.appoly.co.uk)
-   [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

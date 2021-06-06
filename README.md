# AgriAsk

![ss](https://user-images.githubusercontent.com/66185022/120874266-7fa41680-c5d8-11eb-86a5-56df830ea8b1.png)

> AgriAsk merupakan aplikasi berbasis web yang menyediakan fasilitas forum diskusi tanya jawab antar petani atau masyarakat umum agar dapat saling bertukar pikiran dan informasi.

## Laporan Akhir Projek Rekayasa Perangkat Lunak (KOM331)

<ul>
    <li> Pararel            : P1 </li>
    <li> Kelompok           : 5 </li>
</ul>

Asisten Praktikum :
| Nama | NIM |
| ---- | --- |
| Indah Puspita | G64170035 |
| Qoriatul Khairunnisa | G64170014 |

## Developer AgriAsk

| Nama                      | NIM       | ROLE                                 |
| ------------------------- | --------- | ------------------------------------ |
| Muhamad Ilham Fadillah    | G64190028 | Project Manager & Back-End Developer |
| I Dewa Putu Semadi        | G64190021 | Front-End Developer                  |
| Nisma Karmiahtun Fadilah  | G64190036 | UI Designer                          |
| Fryda Lucyana Permatasari | G64190015 | UX Researcher                        |

<img src="https://user-images.githubusercontent.com/66185022/120875574-107df080-c5df-11eb-8cf5-c343c5a9d643.jpg" width="310px" height="auto" />

## A. Latar Belakang

Sejak awal pandemi Covid-19, sektor pertanian diklaim menjadi penopang utama perekonomian nasional. Data Badan Pusat Statistik (BPS) menunjukkan, selama kuartal II/2020, pertanian tumbuh sebesar 16,24%. Peneliti dari Center of Food, Energy and Sustainable Development dari Indef, Rusli Abdullah, juga menyatakan bahwa pertumbuhan tersebut masih akan terus terjadi selama pandemi sampai pasca pandemi covid-19. Sebab, penerapan kebijakan karantina wilayah mengakibatkan masyarakat beralih profesi menjadi petani. Dengan demikian, Kami berinisiatif membangun sebuah wadah untuk menfasilitasi para petani yang masih amatir tersebut. Hadirlah AgriAsk, sebuah aplikasi berbasis web yang menyediakan forum diskusi tanya jawab untuk para petani atau masyarakat umum agar dapat saling bertukar pikiran dan informasi. Juga bertujuan untuk menggaungkan sektor pertanian secara luas.

## B. Tujuan

<ol>
    <li>Mewadahi para petani atau masyarakat Indonesia untuk saling bertukar pikiran dan informasi di bidang pertanian</li>
    <li>Menambah relasi antar petani dalam melangsungkan kegiatan pertaniannya.</li>
    <li>Menguatkan sektor pertanian</li>
</ol>

## C. User Analisis

### C.1 User Profile

Target user aplikasi AgriAsk adalah masyarakat umum tanpa batasan usia dan latar belakang pendidikan tertentu, serta tertarik untuk menambah wawasan seputar pertanian.

### C.2 User Story

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

## D. Spesifikasi Teknis Lingkungan Pengembangan

### D.1 Software

| Komponen    | Teknologi          |
| ----------- | ------------------ |
| Database    | MySQL              |
| Server      | Apache             |
| Text Editor | Visual Studio Code |
| UI Design   | Figma              |

### D.2 Hardware

| Komponen     | Teknologi                        |
| ------------ | -------------------------------- |
| Prosesor     | Acer Intel Core i3-8130U 2.20GHz |
| Memori       | 8 GB DDR4                        |
| Graphic card | NVIDIA GeForce MX150 2GB VRAM    |
| Storage      | HDD 1 TB                         |

### D.3 Tech Stack

| Komponen  | Teknologi                                          |
| --------- | -------------------------------------------------- |
| Front-end | HTML, CSS/SCSS/SASS, Bootstrap, Vanilla Javascript |
| Back-end  | PHP, Laravel, NodeJS                               |

### D.4 Lainnya

| Komponen                                   | Teknologi    |
| ------------------------------------------ | ------------ |
| Task Management                            | Trello       |
| Software documentation                     | Google Sites |
| Version control dan collaboration platform | Github       |

## E. Hasil dan Pembahasan

Pada mata kuliah ini, 7 minggu pertama Kami berfokus pada analisis sistem. Mulai dari menganalisis user flow, use case diagram, activity diagram, dan sebagainya. Setelah UTS, 7 minggu berikutnya Kami fokus pada pengembangan aplikasi AgriAsk. Di sisi front-end, Kami sangat memperhatikan design aplikasi web yang responsive pada semua ukuran layar, lebih tepatnya menggunakan pendekatan Mobile First. Karena tidak dipungkiri bahwa, dari 272,1 juta penduduk Indonesia sebanyak 175.4 juta adalah pengguna aktif internet yang mayoritas mengakses web menggunakan perangkat mobile (Survey dari We Are Social). Selanjutnya, karena Kita mengoleksi data pengguna (email dan password), Kita turut memperhatikan aspek keamanan dari pengguna AgriAsk. Pada bagian back-end, Kami menerapkan beberapa metode pengamanan salah satunya adalah password hashing.

### E.1 Use Case Diagram

![use_case](https://user-images.githubusercontent.com/66185022/120827451-054ea480-c58e-11eb-8c5a-dcfc421e4e9c.png)

### E.2 Activity Diagram

> Mendaftar akun

![activity_diagram_register](https://user-images.githubusercontent.com/66185022/120842949-0983bd80-c5a0-11eb-9952-319bd0cc14c0.jpg)

> Login

![activity_diagram_login](https://user-images.githubusercontent.com/66185022/120876396-0d84ff00-c5e3-11eb-85fc-131cf2cbbc97.jpg)

> Update password

![activity_diagram_lupaPassword](https://user-images.githubusercontent.com/66185022/120845328-3f767100-c5a3-11eb-8695-d44062be0cd0.jpg)

> Membuat pertanyaan

![activity_diagram_create_questions](https://user-images.githubusercontent.com/66185022/120892823-a1d27e80-c642-11eb-8e74-f86fb2da5a0b.jpg)

> Membuat artikel

![activity_diagram_create_article](https://user-images.githubusercontent.com/66185022/120893220-aef06d00-c644-11eb-9800-7ff489d6993d.jpg)

### E.3 Class Diagram

### E.4 Entity Relationship Diagram (ERD)

![erdBaru2](https://user-images.githubusercontent.com/66354919/120881888-86458480-c5fe-11eb-9f69-678b09f158e8.png)

### E.5 Software Architecture

Kami memilih arsitektur MVC karena MVC adalah pola yang bagus untuk memulai pengembangan aplikasi web yang rapi secara kode, memiliki skalabilitas, dan kemampuan dalam memperbaiki kode secara cepat dengan usaha yang sedikit.
![Arsitektur_agriask](https://user-images.githubusercontent.com/66185022/120827674-4646b900-c58e-11eb-9487-049abc02a41a.png)

### E.6 Fungsi Utama yang Dikembangkan

<ul>
    <li> User dapat mendaftar terlebih dahulu menggunakan alamat email di website AgriAsk untuk menggunakan fasilitas yang ada. </li>
    <li> User dapat membuat, mengedit, dan menghapus pertanyaa</li>
    <li> Satu postingan dapat memiliki banyak komentar/jawaban oleh user lain. </li>
    <li> Setiap user memiliki poin kredibilitas tergantung seberapa sering user membantu menjawab pertanyaan-pertanyaan dan poin pada permulaan dimulai dari 0. </li>
    <li> Jika komentar/jawaban dari user lain sekiranya membantu menjawab pertanyaan dari user yang mengajukan pertanyaan, maka user-user yang terdaftar di website dapat menambahkan skor kepada user yang menjawab dengan menekan tombol commend. Tombol commend akan menambah 10 poin kepada user yang menjawab. Jika jawaban tidak membantu, user lain dapat menekan tombol uncommend yang akan mengakibatkan pengurangan poin sebesar 5 kepada user yang menjawab. </li>
</ul>

### E.7 Fungsi CRUD

> Create

<ul>
    <li>Membuat akun pada aplikasi web AgriAsk</li>
    <li>Membuat dan menjawab pertanyaan</li>
    <li>Membuat dan berkomentar pada artikel</li>
</ul>

> Read

<ul>
    <li>Membaca user input (email dan password) pada akun pengguna saat login</li>
    <li>Menampilkan daftar pertanyaan</li>
    <li>Menampilkan daftar pengguna AgriAsk</li>
    <li>Pada dashboard user, menampilkan total mengajukan dan menjawab pertanyaan, serta total artikel</li>
</ul>

> Update

<ul>
    <li>Mengedit pertanyaan</li>
    <li>Mengubah kata sandi</li>
    <li>Mengedit artikel </li>
    <li>Menambah poin kredibilitas sebagai reputasi pengguna </li>
    <li>Mengganti nama dan username</li>
    <li>Menambahkan foto profil pada pengguna</li>
    <li>Menambah atau mengurangi total upvote atau downvote pada pertanyaan</li>
</ul>

> Delete

<ul>
    <li>Menghapus pertanyaan</li>
    <li>Menghapus komentar pada pertanyaan</li>
    <li>Menghapus artikel</li>
</ul>

## F. Hasil Implementasi

### F.1 Versi Mobile

#### 1. Landing Page

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120878204-6ce80c80-c5ed-11eb-9830-4e0ce83ed665.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120878237-9bfe7e00-c5ed-11eb-863e-dd2c71873913.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120878241-a3258c00-c5ed-11eb-9c5a-2492e719e6fe.jpg"/></td>
  </tr>
</table>

#### 2. Komunitas

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120889928-32549300-c632-11eb-9993-ce220bd4611a.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120889935-3ed8eb80-c632-11eb-88c5-4f4cc2adab35.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120889942-4b5d4400-c632-11eb-9e36-dda448cfabf8.jpg"/></td>
  </tr>
</table>

#### 3. Detail Pertanyaan

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120889980-8fe8df80-c632-11eb-8e72-c1839b16760c.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120889988-9d9e6500-c632-11eb-8a2f-4075e0a3fe15.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120889994-a98a2700-c632-11eb-80f3-1c69e1bc3d22.jpg"/></td>
  </tr>
</table>

#### 4. Frequently Ask Questions (FAQ)

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890038-eeae5900-c632-11eb-8d93-5edb76331e8a.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890081-37fea880-c633-11eb-80b4-d176f855ec06.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890091-42b93d80-c633-11eb-87b9-5746470dd203.jpg"/></td>
  </tr>
</table>

#### 5. Login, Register, Forgot Password

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890263-0b975c00-c634-11eb-9733-0f065ae319b7.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890280-25d13a00-c634-11eb-9bbd-995c44ff85fb.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890289-2ff33880-c634-11eb-81cd-e8810fdbd9b5.jpg"/></td>
  </tr>
</table>

#### 6. Dashboard User : Overview

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890319-7c3e7880-c634-11eb-811d-d420e6d07fbc.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890325-8bbdc180-c634-11eb-80d4-2ecab692496b.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890331-95dfc000-c634-11eb-862c-51df5ada364c.jpg"/></td>
  </tr>
</table>

#### 7. Dashboard User : Daftar Pertanyaan & Daftar Artikel

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890365-d63f3e00-c634-11eb-8973-62dea865ddf6.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890370-e2c39680-c634-11eb-9dba-6ca3a2d4a4ad.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890383-ece59500-c634-11eb-9829-a24b3c36f147.jpg"/></td>
  </tr>
</table>

#### 8. Dashboard User : Pengaturan Akun

<table>
  <tr>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890427-26b69b80-c635-11eb-8f89-fc6ab3510b98.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890435-32a25d80-c635-11eb-8859-0e015e15e22e.jpg"/></td>
    <td valign="top"><img src="https://user-images.githubusercontent.com/66185022/120890443-40f07980-c635-11eb-9072-41e2463686dc.jpg"/></td>
  </tr>
</table>

### F.2 Versi Desktop

#### 1. Landing Page

![ss](https://user-images.githubusercontent.com/66185022/120874266-7fa41680-c5d8-11eb-86a5-56df830ea8b1.png)
![image](https://user-images.githubusercontent.com/66185022/120890594-692ca800-c636-11eb-96ab-5e74e0968c1c.png)

### 2. Komunitas

![image](https://user-images.githubusercontent.com/66185022/120890634-aee97080-c636-11eb-88c5-60eb7616498c.png)
![image](https://user-images.githubusercontent.com/66185022/120890647-c32d6d80-c636-11eb-8446-181ca45312ef.png)
![image](https://user-images.githubusercontent.com/66185022/120890659-db9d8800-c636-11eb-81b8-01f02bb7a64c.png)
![image](https://user-images.githubusercontent.com/66185022/120890674-ea843a80-c636-11eb-8487-644c981e8623.png)

#### 3. Detail Pertanyaan

![image](https://user-images.githubusercontent.com/66185022/120890697-0e478080-c637-11eb-9a0c-881a24a3c91c.png)
![image](https://user-images.githubusercontent.com/66185022/120890709-1c959c80-c637-11eb-954b-52b75cebc8a5.png)

#### 4. Frequently Ask Questions (FAQ)

![image](https://user-images.githubusercontent.com/66185022/120890727-3636e400-c637-11eb-8940-4994ebdd7321.png)

#### 5. Login

![image](https://user-images.githubusercontent.com/66185022/120890769-68484600-c637-11eb-8068-ceb12a2dcf5f.png)

#### 6. Register

![image](https://user-images.githubusercontent.com/66185022/120890780-7a29e900-c637-11eb-9a24-283f2a2b0553.png)

#### 7. Forgot Password

![image](https://user-images.githubusercontent.com/66185022/120890817-aa718780-c637-11eb-9065-c05e583b9740.png)

#### 8. Dashboard User

![image](https://user-images.githubusercontent.com/66185022/120890844-d5f47200-c637-11eb-8928-be496537f110.png)
![image](https://user-images.githubusercontent.com/66185022/120890857-ead10580-c637-11eb-9331-9a8bd685d317.png)
![image](https://user-images.githubusercontent.com/66185022/120890871-ffad9900-c637-11eb-96c7-d126bf228098.png)

#### 9. Dashboard User : Pengaturan Akun

![image](https://user-images.githubusercontent.com/66185022/120890900-384d7280-c638-11eb-8c2a-7e97186328df.png)
![image](https://user-images.githubusercontent.com/66185022/120890910-4ac7ac00-c638-11eb-89a2-60168136e320.png)

### F.3 Link Aplikasi

Demo aplikasi dapat diakses pada tautan berikut [demo-agriAsk]

## G. Testing (Test Cases)

Kami melakukan pengujian secara manual (manual testing) tanpa menggunakan bantuan tools atau scripts, tujuannya adalah untuk memastikan aplikasi bebas dari bugs/error dan memastikan dapat bekerja sesuai dengan yang diharapkan.

### G.1 Positive Case

Pengujian Positif merupakan jenis pengujian yang dilakukan pada aplikasi perangkat lunak dengan memberikan kumpulan data yang valid sebagai input.

| No  | Scenario                                                       | Pre-requisites             | Steps                                                                                                               | Expected Results                                    | Actual Result   | Status |
| --- | -------------------------------------------------------------- | -------------------------- | ------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------- | --------------- | ------ |
| 1   | User login dengan akun yang valid                              | user mengakses web AgriAsk | Pergi ke halaman login, masukkan email dan password, klik login                                                     | Login berhasil dan user diarahkan ke home           | as expected     | Pass   |
| 2   | User mendaftar username, alamat email, dan password yang valid | user mengakses web AgriAsk | Pergi ke halaman daftar, masukkan nama, username, alamat email, password, dan konfirmasi password, lalu klik daftar | daftar berhasil                                     | as expected     | pass   |
| 3   | Reset password dengan alamat email yang valid                  | user mengakses web AgriAsk | Pergi ke halaman lupa password, masukkan alamat email, klik submit                                                  | berhasil mengirim link reset password ke email user | not as expected | fail   |
| 4   |                                                                |                            |                                                                                                                     |                                                     |                 |        |

### G.2 Negative Case

Pengujian Negatif adalah metode pengujian yang dilakukan pada aplikasi perangkat lunak dengan memberikan kumpulan data yang tidak valid atau tidak tepat sebagai input.

| No  | Scenario                                                             | Pre-requisites             | Steps                                                                                                               | Expected Results                    | Actual Result         | Status      |
| --- | -------------------------------------------------------------------- | -------------------------- | ------------------------------------------------------------------------------------------------------------------- | ----------------------------------- | --------------------- | ----------- |
| 1   | User login dengan akun yang tidak valid                              | user mengakses web AgriAsk | Pergi ke halaman login, masukkan email dan password, klik login                                                     | Munculkan pesan error               | as expected           | pass        |
| 2   | User mendaftar username, alamat email, dan password yang tidak valid | user mengakses web AgriAsk | Pergi ke halaman daftar, masukkan nama, username, alamat email, password, dan konfirmasi password, lalu klik daftar | daftar gagal, tampilkan pesan error | as expected           | pass        |
| 3   | Reset password dengan alamat email yang tidak valid                  | user mengakses web AgriAsk | Pergi ke halaman lupa password, masukkan alamat email, klik submit                                                  |                                     | tampilkan pesan error | as expected | pass |
| 4   |                                                                      |                            |                                                                                                                     |                                     |                       |             |

## H. Kesimpulan

Dengan rentang waktu pengembangan aplikasi yang terbatas, tim Kami berhasil membangun sistem yang diharapkan walaupun masih jauh dari kata sempurna. Fitur-fitur mayor seperti autentikasi, membuat dan menjawab pertanyaan, serta menambah poin kredibilitas berhasil diimplementasikan dengan baik. Namun, fitur-fitur minor seperti membuat artikel dan berkomentar pada artikel belum berhasil diimplementasikan.

## I. Saran untuk Pengembangan Berikutnya

<ol>
    <li>Sebaiknya, gunakan domain (beli) agriask.com saat sudah di tahap production.</li>
    <li>Untuk pengembangan berikutnya, dapat mempertimbangkan fitur Progressive Web Apps (PWA), sehingga aplikasi web seolah-olah menjadi native dan dapat di install pada perangkat mobile.</li>
    <li>Kedepannya, AgriAsk diharapkan tidak hanya menjadi forum diskusi, tetapi wadah bertemunya investor dengan para petani. Sehingga, AgriAsk akan memiliki value di masyarakat.</li>
</ol>

## J. Ucapan Terima Kasih

Selama pengembangan aplikasi AgriAsk ini, tim Kami banyak mempelajari hal-hal baru dalam bidang software engineering, mulai dari task management, user analisis, stakeholder, dan sebagainya. Maka dari itu, Kami ingin mengucapkan rasa terima kasih kepada:

<ol>
    <li>IPB University sebagai kampus tercinta</li>
    <li>Para dosen Ilmu Komputer IPB University karena telah membagikan ilmu dan pengalamannya kepada Kami</li>
    <li>Kak Indah Puspita dan Qoriatul Khairunnisa selaku asisten praktikum karena telah memberikan masukan dan saran terhadap pengembangan aplikasi AgriAsk </li>
</ol>

## K. Credits

Beberapa ilustrasi dan gambar berasal dari internet, berikut akan kami lampirkan sumbernya.

[storyset]

[pixabay]

[unsplash]

## L. Cara Menjalankan Aplikasi AgriAsk Pada Localhost

Repositori ini dibangun dengan Laravel versi 6.02 dan php versi 7 ke atas. Lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

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

-   install node modules (pastikan nodejs sudah terinstall)

```bash
npm install
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

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

[`Kembali Keatas ^`](#)

[demo-agriask]: https://ipb.link/agriask
[storyset]: https://storyset.com/
[pixabay]: https://pixabay.com/
[unsplash]: https://unsplash.com/

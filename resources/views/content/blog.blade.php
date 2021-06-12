@extends('agriask.master')

@section('content')
    <main class="container">
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">Selamat Datang di Blog Post!</h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on April 24, 2021 by Agriask Dev</div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Collaboration</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Laravel</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Javascript</a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://cdn.pixabay.com/photo/2019/06/06/08/00/hydroponics-4255403_960_720.jpg" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">Dengan rentang waktu pengembangan aplikasi yang terbatas, tim Kami berhasil membangun sistem yang diharapkan walaupun masih jauh dari kata sempurna. Fitur-fitur mayor seperti autentikasi, membuat dan menjawab pertanyaan, memberi komentar pada peranyaan, serta menambah poin kredibilitas berhasil diimplementasikan dengan baik. Namun, fitur-fitur minor seperti membuat artikel belum berhasil diimplementasikan.</p>
                            <p class="fs-5 mb-4">Selama pengembangan aplikasi AgriAsk ini, tim Kami banyak mempelajari hal-hal baru dalam bidang software engineering, mulai dari task management, user analisis, stakeholder, dan sebagainya. Maka dari itu, Kami ingin mengucapkan rasa terima kasih kepada IPB University sebagai kampus tercinta, Para dosen Ilmu Komputer IPB University karena telah membagikan ilmu dan pengalamannya kepada Kami, 
                            Kak Indah Puspita dan Qoriatul Khairunnisa selaku asisten praktikum karena telah memberikan masukan dan saran terhadap pengembangan aplikasi AgriAsk</p>
                            
                            <h2 class="fw-bolder mb-4 mt-5">Motivasi Kami membuat Web AgriAsk</h2>
                            <p class="fs-5 mb-4">Pada mata kuliah ini, 7 minggu pertama Kami berfokus pada analisis sistem. Mulai dari menganalisis user flow, use case diagram, activity diagram, dan sebagainya. Setelah UTS, 7 minggu berikutnya Kami fokus pada pengembangan aplikasi AgriAsk. Di sisi front-end, Kami sangat memperhatikan design aplikasi web yang responsive pada semua ukuran layar, lebih tepatnya menggunakan pendekatan Mobile First.</p>
                            <p class="fs-5 mb-4">Karena tidak dipungkiri bahwa, dari 272,1 juta penduduk Indonesia sebanyak 175.4 juta adalah pengguna aktif internet yang mayoritas mengakses web menggunakan perangkat mobile (Survey dari We Are Social). Selanjutnya, karena Kita mengoleksi data pengguna (email dan password), Kita turut memperhatikan aspek keamanan dari pengguna AgriAsk. Pada bagian back-end, Kami menerapkan beberapa metode pengamanan salah satunya adalah password hashing.</p>
                        </section>
                    </article>
                    
                </div>

                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Cari pertanyaan</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <a href="/community">
                                <button class="btn btn-success" id="button-search" type="button">Go!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Laravel</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">PHP</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Berkenalan dengan Developer Kami</div>
                        <div class="card-body">
                        <div class="col-md-12 my-2">
                            <div class="border bg-white rounded p-3 box-shadow-card">
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="d-flex">
                                        <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                            alt="user profile" width="40px" height="40px"
                                            class="my-auto rounded-circle">
                                        <div>
                                            <a href=# class="text-decoration-none text-dark">
                                                <p class="ms-2 my-auto">Muhamad Ilham Fadillah</p>
                                            </a>
                                            <p class="ms-2 my-auto">
                                               
                                                <small><span class="text-muted align-text-top">
                                                Backend Engineer
                                                </span></small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="border bg-white rounded p-3 box-shadow-card">
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="d-flex">
                                        <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                            alt="user profile" width="40px" height="40px"
                                            class="my-auto rounded-circle">
                                        <div>
                                            <a href=# class="text-decoration-none text-dark">
                                                <p class="ms-2 my-auto">I Dewa Putu Semadi</p>
                                            </a>
                                            <p class="ms-2 my-auto">
                                                
                                                <small><span class="text-muted align-text-top">
                                                Frontend Engineer
                                                </span></small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="border bg-white rounded p-3 box-shadow-card">
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="d-flex">
                                        <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                            alt="user profile" width="40px" height="40px"
                                            class="my-auto rounded-circle">
                                        <div>
                                            <a href=# class="text-decoration-none text-dark">
                                                <p class="ms-2 my-auto">Nisma Karmiahtun Fadillah</p>
                                            </a>
                                            <p class="ms-2 my-auto">
                                                <small><span class="text-muted align-text-top">
                                                UI/UX Designer
                                                </span></small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12 my-2">
                            <div class="border bg-white rounded p-3 box-shadow-card">
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="d-flex">
                                        <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                            alt="user profile" width="40px" height="40px"
                                            class="my-auto rounded-circle">
                                        <div>
                                            <a href=# class="text-decoration-none text-dark">
                                                <p class="ms-2 my-auto">Fryda Lucyana Permatasari</p>
                                            </a>
                                            <p class="ms-2 my-auto">
                                                <small><span class="text-muted align-text-top">
                                                
                                                </span></small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
    </main>
@endsection
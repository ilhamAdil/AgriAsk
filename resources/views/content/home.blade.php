@extends('agriask.master')

@section('content')
<div class="jumbotron">
            <div class="jumbotron-inner">
                <h3 class="jumbotron_title">
                    Bingung Seputar Pertanian?
                </h3>
                <h3 class="jumbotron_title">
                    <span id="typewriter" class="mt-2"></span>
                </h3>
                <h6 class="jumbotron_tagline">
                    AgriAsk hadir untuk para petani di Indonesia! Kamu bisa belajar dan berbagi informasi
                    seputar pertanian terkini.
                </h6>
                <a href="/community" class="btn page-scroll">
                    <button class="btn btn-success " aria-label="Tanya Sekarang Button">
                        Tanya Sekarang
                    </button>
                </a>
            </div>
</div>

        <!-- article -->
        <div id="articles" class="container mt-5">
        <div class="card mb-4 w-100 box-shadow-card get-article-detail">
                <div class="row g-0">
                    <div class="col-md-4 card-img-wrap">
                        <img src="https://cdn.pixabay.com/photo/2019/06/06/08/00/hydroponics-4255403_960_720.jpg" alt="Langkah Awal Menanam Hidroponik" class="w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title fw-bold box-tittle">Langkah Awal Menanam Hidroponik</h6>
                            </a>

                            <p class="card-text"><small class="text-muted">Semadi - 24 April 2021</small></p>
                            <p class="card-text desc">Cara bercocok tanam hidroponik adalah metode penanaman tanaman tanpa menggunakan media tumbuh dari tanah. Secara harfiah, hidroponik berarti penanam dalam air yang mengandung campuran hara. Budidaya tanaman sayuran dengan sistem hidroponik, Balai Penelitian Tanaman Sayuran (Balitsa).</p>
                            <p class="card-text"><small class="text-muted">#hidroponik</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="container see-article-container">
            <a href="/blog" class="text-decoration-none see-all-article">
                <p class="text-center text-dark see-all-article">Lihat semua artikel<i
                        class="bi bi-arrow-right-short arrow-right-icon" style="font-size: 1.6rem;"></i></p>
            </a>
        </div>
@endsection





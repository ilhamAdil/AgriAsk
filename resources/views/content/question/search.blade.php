@extends('content.community')

@section('button')
<h4 class="">Pertanyaan</h1>
<a href="" class="btn btn-success fs-6 create-question" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
    <i class="bi bi-plus d-inline-block g-0" style="font-size:1.1rem;"></i>Buat pertanyaan
</a>
@endsection

@section('precontent')

        <!-- filter -->
        <div class="my-2">
                        <a href="" class="text-decoration-none text-dark text-end">Baru</a>
                        <a href="" class="text-decoration-none text-dark text-end ms-3">Belum dijawab</a>
                    </div>
                    <div class="border-bottom mt-2"></div>
                    <!-- search button -->
                    <form class="input-group mb-3 w-50 mt-3" method="get" action="/community/search">    
                        <input type="text" name="query" class="form-control" placeholder="cari pertanyaan..."
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>
                    </form>
@endsection

@section('content')    
    <!-- questions -->
    @foreach($questions as $question)
    <div class="card bs-callout box-shadow-card my-3">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="/community/{{ $question->id }}" class="text-decoration-none text-dark">
                    <h6 class="fw-bold question-tittle box-tittle">{{ $question->title }}</h6>
                </a>                
                <div class="dropdown">
                            <i class="bi bi-three-dots dots-icon" class="dropdown-toggle" type="button"
                                id="dropdownMenuButton${i}" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu dots-menu" aria-labelledby="dropdownMenuButton">
                                <li><a href="/community/{{ $question->id }}/edit" class="dropdown-item"><i class="bi bi-pencil-square me-2"></i>edit</a></li>
                                <li>
                                <form action="/community/{{ $question->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item delete-dropdown">
                                    <i class="bi bi-trash me-2"></i>hapus
                                    </button>
                                </form>
                                </li>
                            </ul>
                </div>
            </div>

                <p class="card-text"><small class="text-muted"> {{ $question->user->username }} - {{ $question->created_at->diffForHumans() }}</small>
                </p>
                <p class="desc">{{ $question->body }}</p>
                <div class="d-flex justify-content-between">
                    <p class="card-text mb-0"><small class="text-muted">hidroponik</small></p>
                    <span class="mb-0"> 
                    0 jawaban
                    </span>
                </div>
            </div>
    </div> 
    @endforeach
@endsection


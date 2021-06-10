@extends('content.community')

@section('button')
<div class="d-flex justify-content-between">
<h4 class="">Pertanyaan</h1>
<a href="" class="btn btn-success fs-6 create-question" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
    <i class="bi bi-plus d-inline-block g-0" style="font-size:1.1rem;"></i>Buat pertanyaan
</a>
</div>
@endsection

@section('precontent')

        <!-- filter -->
        <div class="my-2">
                        <a href="" class="text-decoration-none text-dark text-end">Baru</a>
                        <a href="" class="text-decoration-none text-dark text-end ms-3">Belum dijawab</a>
                    </div>
         <div class="border-bottom mt-2"></div>
                    <!-- search button -->
                   
@endsection

@section('content')    
    <!-- questions -->
    @foreach($questions as $question)
    <div class="card bs-callout box-shadow-card my-3">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="/community/{{ $question->id }}/detail/{{ $question->user_id }}" class="text-decoration-none text-dark">
                    <h6 class="fw-bold question-tittle box-tittle">{{ $question->title }}</h6>
                </a>            
                @if($question->user->username === Auth::user()->username)
                <div class="dropdown">
                            <i class="bi bi-three-dots dots-icon" class="dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
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
                @endif      
            </div>

                <p class="card-text"><small class="text-muted"> {{ $question->user->username }} - {{ $question->created_at->diffForHumans() }}</small>
                </p>
                <p class="desc">{{ $question->body }}</p>
                <div class="d-flex justify-content-end">                    
                    <p class="card-text mb-0"><small class="text-muted">
                    <?php 
                    $i=0;
                    foreach($question->tags as $tag){
                        if($i<4){ ?>
                            <button type="button" class="btn btn-success btn-sm mt-1">{{ $tag->tag_name }}</button>
                    <?php }
                        else { ?>
                            <button type="button" class="btn btn-success btn-sm mt-1">{{ $tag->tag_name }}</button><br>
                    <?php
                            $i=0;   
                        }
                        $i++;
                    }
                    ?>
                    </small></p>
                   
                </div>
            </div>
    </div> 
    @endforeach
@endsection

@section('content2')
<div class="col-lg-3 right-container">
                    <div class="div border rounded bg-white p-3 right-panel">
                        <p class="text-warning">User Terbaru</p>    
                        <!-- user list -->
                    <div class="d-flex">
                    <div>
                    <?php $count=0; ?>     
                    @foreach($users as $user)                                                
                        <?php if($count==7) break; ?>  
                            <p>{{ $user->username }}</p>                      
                        <?php $count++; ?>                  
                    @endforeach   
                    </div>
                    
                    <div class="">
                    <?php $count=0; ?>     
                    @foreach($poin as $key => $values)                       
                        @foreach($values as $value)                          
                        <?php if($count==7) break; ?>                  
                  
                            
                            <div>                       
                            <p class="ms-2">
                            <i class="bi bi-star-fill" style="color: orange;"></i>
                            <small class="text-muted">{{ $value }} poin</small>
                            </p>
                            </div>                        
                        <?php $count++; ?>
                        @endforeach                       
                    @endforeach
                    </div>
                    </div>
                    </div>
                </div>
@endsection               
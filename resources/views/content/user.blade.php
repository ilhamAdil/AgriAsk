@extends('agriask.master')

@section('content')
<main id="main-content" class="my-5 content-container-mobile">
        <div class="container">
            <div class="row">
                <!-- left side -->
                <div class="col-md-3 col-lg-3">
                    <div class="d-flex flex-column left-panel">
                        <h4 class="mb-4">Profil Saya</h4>
                        <div class="d-flex flex-column">
                            <a href="/user/{{ $user->id ?? ''}}/overview" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Overview</a>
                            <a href="/user/{{ $user->id ?? ''}}/listquestion" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Daftar Pertanyaan</a>
                            <a href="/user/{{ $user->id ?? ''}}/listarticle" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Daftar Artikel</a>
                        </div>
                    </div>
                </div>

                <!-- right side detail -->
                <div class="col-md-9 col-lg-9 margin-when-mobile">
                    <div class="p-4 bg-white border rounded padding-acc-mobile">
                        <h4 class="border-bottom pb-3">Overview</h4>

                        <div class="d-flex mt-4 user-overview-container">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png"
                                alt="user profile" class="rounded my-auto" width="180px" height="180px">
                            <div class="ms-4 align-self-center user-profile w-100">
                                <h5 class="">{{ $user->name }}</h5>
                                <p class="my-2">{{ $user->username }}</p>
                                <p class="mb-2">
                                    <i class="bi bi-star-fill" style="color: var(--yellow_);"></i>
                                    @foreach($poin as $key => $values)                       
                                        @foreach($values as $value) 
                                    <span class="align-text-top">{{ $value ?? 0 }} poin</span>
                                        @endforeach
                                    @endforeach    
                                </p>
                                <p>Bergabung sejak {{ ' '.$user->created_at->format('Y-m-d')}}</p>

                                 @if($user->id === Auth::id())    
                                <a href="/setting/{{  Auth::id() }}" class="btn btn-outline-success">Edit profil</a>
                                @endif
                            </div>
                        </div>

                        <div class="row text-center mt-5">
                            <div class="col-md-4 col-lg-4">
                                <div class="rounded p-3 my-2 quantity-profile">
                                    <h6>Mengajukan</h6>
                                    <h3>{{ $totalQuestion ?? 0 }}</h3>
                                    <h6 class="text-center mb-0">Pertanyaan</h6>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <div class="rounded p-3 my-2 quantity-profile">
                                    <h6>Menjawab</h6>
                                    <h3>{{ $answered ?? 0 }}</h3>
                                    <h6 class="text-center mb-0">Pertanyaan</h6>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4">
                                <div class="rounded p-3 my-2 quantity-profile">
                                    <h6>Menulis</h6>
                                    <h3>0</h3>
                                    <h6 class="text-center mb-0">Artikel</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
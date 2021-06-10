<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AgriAsk - Register</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">  
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar padding">
            <div class="container height-navbar w-100">
                <div class="brand">
                    <a href="/home" class="page-scroll">
                        <h3>AgriAsk</h3>
                    </a>
                </div>

                <div class="d-flex justify-content-center hamburger-container hamburger-container">
                    <i class="bi bi-list text-center hamburger-icon" id="hamburger" style="font-size:2.2rem; color: black;"></i>
                </div>

                <div class="nav-list" id="drawer">
                    <!-- close icon  -->
                        <i class="bi bi-x back btn back-icon" id="backMenu" style="font-size:2.2rem; color: var(--red_);"></i>
                
                    <div class="d-flex menu-list">
                        <div class="menu-li home-utama">
                            <a href="/home" class="page-scroll act">Home</a>
                        </div>

                        <div class="menu-li community">
                            <a href="/community" class="page-scroll act">Komunitas</a>
                        </div>

                        <div class="menu-li blog">
                            <a href="/blog" class="act">Blog</a>
                        </div>

                        <div class="menu-li about act">
                            <a href="/faq" class="act">FAQ</a>
                        </div>
                    </div>

                    @guest
                    <div class="d-flex justify-content-end auth-home align-self-center">
                        <div class="auth-li">
                            <a href="{{ route('login') }}" class="sign-in-home">Masuk</a>
                        </div>
                        @if (Route::has('register'))
                        <div class="auth-li border-auth">
                            <a href="{{ route('register') }}" class="btn btn-success text-white sign-up-btn">Daftar</a>
                        </div>
                        @endif
                    </div>    
                      

                    @else
                    <div class="d-flex justify-content-end auth-home align-self-center">
                        <div class="auth dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <i class="bi bi-person me-2 my-auto">
                                        </i>
                                        Profile
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right me-2 my-auto"></i>  
                                        Keluar
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>                            
                        </div>            
                    </div>
                @endguest   

                </div>
            </div>
        </nav>
    </div>    

        <main class="py-4">
        <div class="container h-100 height-sign-up-form">
        <div class="row h-100">
            <div class="col-sm-12 col-md-7 col-lg-4 mx-auto my-auto">
                <div class="bg-transparent card border-0 my-auto">
                    <div class="card-body p-0">
                        <div class="w-100 text-center">
                            <img src="../assets/icons/brand.svg" alt="agriask logo" class="mb-3" width="150px">
                        </div>

                        <h5 class="card-title fs-3 text-center mb-4">Mohon isi data di bawah ini dengan benar</h5>

                        <form class="mt-1" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="nama lengkap">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                            
                            <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                                    placeholder="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label">Alamat email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    aria-describedby="emailHelp" placeholder="nama@address.com">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- alert if input password and confirm are not same -->
                            <!-- <div class="visually-hidden animate__animated" id="passAlert">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Oops! kata sandi dan konfirmasi kata sandi Kamu tidak sama!
                                </div>
                            </div> -->

                            <div class="mb-2">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                    placeholder="masukkan kata sandi" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number, one uppercase, lowercase letter, and at least 8 or more characters.">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="mb-2">
                                <label for="password-confirm" class="form-label">Konfirmasi Kata Sandi</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                    placeholder="konfirmasi kata sandi" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number, one uppercase, lowercase letter, and at least 8 or more characters.">                            
                            </div>

                            <!-- <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input cursor" id="check-show-pass">
                                <label class="form-check-label text-secondary">Tampilkan kata sandi</label>
                            </div> -->
                            <button type="submit" class="btn btn-success w-100 mt-1" id="signUpSubmit">
                                <i class="bi bi-person-plus me-1 sign-up-icon"></i>
                                Daftar</button>
                        </form>

                        <div class="d-flex justify-content-center mt-3">
                            <span>
                                <p class="text-secondary">Sudah punya akun?</p>
                            </span>
                            <span class="ms-1"><a href="./sign-in.html"
                                    class="text-decoration-none text-success">Masuk</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>



<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


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
                        <!-- <i class="bi bi-x back btn back-icon" id="backMenu" style="font-size:2.2rem; color: var(--red_);"></i> -->
                
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

                                <li class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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

    <div class="row w-100 h-100 g-0">
        <!-- background image -->
        <div class="sign-in-bg-illus h-100 col-sm-12 col-md-6 col-lg-6 sign-in-illus" id="sign-in-bg">
            <div class="container h-100 w-100">                
            </div>
        </div>

        <!-- sign in -->
        <div class="h-100 col-sm-12 col-md-6 col-lg-6">
            <div class="row h-100 g-0">
                <div class="col-sm-12 col-md-10 col-lg-8 mx-auto my-auto">
                    <div class="bg-transparent card border-0 my-auto">
                        <div class="card-body">
                            <div class="w-100 text-center">
                                <img src="assets/icons/brand.svg" alt="agriask logo" class="mb-3" width="150px">
                            </div>

                            <h5 class="card-title fs-2 sign-in-tittle">Welcome back! silahkan masuk ke akun Kamu</h5>
                            <p class="card-text text-secondary sign-in-desc">Tanya jawab dan dapatkan poin
                                kredibilitas!</p>

                            <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="mb-2">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="nama@address.com">
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror

                                </div>

                                <div class="mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password" class="form-label">Kata Sandi</label>                                
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="text-decoration-none text-secondary forgot-pass">Lupa kata sandi?</a>
                                        @endif
                                    </div>

                                    <div class="input-group">
                                        <!-- password input -->
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" 
                                        placeholder="masukkan kata sandi">                                        
                                        <!-- show/hide password icon -->
                                        <span class="input-group-text lh-1">
                                            <i class="bi bi-eye cursor eye-icon" id="togglePassword"></i>
                                        </span> 
                                                                              
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-secondary" for="remember">Ingat saya</label>
                                </div>
                                <button type="submit" class="btn btn-success w-100 mt-1 align-middle" id="signInSubmit >
                                    <i class="bi bi-box-arrow-in-right me-1 sign-in-icon"></i>
                                    Masuk</button>
                                <div class="d-flex justify-content-center mt-3">
                                <span>
                                    <p class="text-secondary">Belum punya akun?</p>
                                </span>
                                <span class="ms-1"><a href="{{ route('register') }}"
                                        class="text-success">Daftar</a></span>
                                </div>
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

  
</body>
</html>




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="modern agriculture community">
    <meta name="author" content="dewasemadi@apps.ipb.ac.id">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">   
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/favicon/site.webmanifest">
    <title>AgriAsk</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <a href="#main-content" class="skip-link page-scroll" tabindex="0">Skip to content</a>

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
                            <a href=/faq class="act">FAQ</a>
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
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>
                                
                                <li class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                    <a class="dropdown-item border-bottom" href="/user/{{ Auth::id()}}/overview">
                                   
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

    <main id="main-content" class="my-5">
        @yield('content')
    </main>   


    <footer class="footer-custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4 class="text-center mt-4 mb-3 footer-title fw-light">Agriask</h4>
                        <p class="text-center footer-desc fw-light">AgriAsk adalah komunitas pertanian terbesar di Indonesia! Kamu bisa belajar dan
                            berbagi
                            informasi seputar pertanian terkini.</p>
                        <p class="text-center footer-email fw-light">Contact us: info@agriask.com</p>
                        <div class="footer-icon text-center">
                            <a href="" class="text-decoration-none"><i class="bi bi-facebook mx-2 foot-icon" style="font-size: 1.3rem; color: var(--medium_gray_)"></i></a>
                            <a href="" class="text-decoration-none"><i class="bi bi-twitter mx-2 foot-icon" style="font-size: 1.3rem; color: var(--medium_gray_)"></i></a>
                            <a href="" class="text-decoration-none"> <i class="bi bi-youtube mx-2 foot-icon" style="font-size: 1.3rem; color: var(--medium_gray_)"></i></a>
                            <a href="" class="text-decoration-none"><i class="bi bi-telegram mx-2 foot-icon" style="font-size: 1.3rem; color: var(--medium_gray_)"></i></a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom my-3"></div>

                <div class="d-flex justify-content-between copyright-footer">
                    <div>
                        <p class="copyright-txt fw-light">Copyright &copy;2021 - agriask.com</p>
                    </div>
                    <div class="footer-detail">
                        <a href="" class="text-decoration-none mx-2 fw-light">Tentang Kami</a>
                        <a href="" class="text-decoration-none mx-2 fw-light">Tim Kami</a>
                        <a href="" class="text-decoration-none mx-2 fw-light">Ketentuan Layanan</a>
                        <a href="" class="text-decoration-none mx-2 fw-light">Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </footer>   
</body>
@stack('scripts')

</html>
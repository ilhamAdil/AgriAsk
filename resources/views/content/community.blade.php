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
    <title>Blog</title>
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
                                    {{ Auth::user()->username }} <span class="caret"></span>
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

    <main id="main-content" class="my-5">
    <div class="container">
            <div class="row">
                <!-- left panel-->
                <div class="col-lg-2 left-container">
                    <div class="left-panel">
                        <ul class="list-unstyled border-top border-bottom">
                            <li class="my-3">
                                <a href="" class="text-decoration-none text-dark">Pertanyaan</a>
                            </li>
                            <li class="my-3">
                                <a href="" class="text-decoration-none text-dark">Tags</a>
                            </li>
                            <li class="my-3">
                                <a href="" class="text-decoration-none text-dark">Users</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- modal when create question -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Buat pertanyaan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- direct ke faq cara bikin pertanyaan -->
                                <div class="alert alert-warning p-2 mb-0" role="alert">
                                    <small>
                                        <p class="mb-0">Lihat <a href="./faq.html"
                                                class="text-decoration-none text-success"><b>disini</b></a>
                                            agar pertanyaan-Mu lebih
                                            cepat dijawab.</p>
                                    </small>
                                </div>

                                <!-- questions form -->
                                <form action="/community" method="post">
                                @csrf
                                    <div class="mb-0">
                                        <label class="col-form-label">Judul</label>
                                        <textarea type="message-text text-wrap" class="form-control" name="title"
                                            placeholder="e.g. Bagaimana cara menghasilkan bibit unggul pada tanaman pepaya?"></textarea>
                                    </div>
                                    <div class="mb-0">
                                        <label for="message-text" class="col-form-label">Deskripsi</label>
                                        <textarea class="form-control" class="message-text text-wrap" name="body"
                                            placeholder="Ketik deskripsi pertanyaan Anda disini"></textarea>
                                    </div>
                                    <div class="mb-0">
                                        <label for="message-text" class="col-form-label">Tags</label>
                                        <textarea class="form-control" class="message-text text-wrap" name="tags"
                                            placeholder="Pisahkan dengan koma: hidroponik,aeroponik"></textarea>
                                    </div>
                                    <div class="modal-footer py-2 border-0">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>         
                

                <!-- center panel-->
                <div class="col-lg-7 center-container">
                    <div class="d-flex justify-content-between">
                        @yield('button')
                    </div>


                    @yield('precontent')               

                 
                    @yield('content')  

                     <!-- pagination -->
                     <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- right panel-->
                <div class="col-lg-3 right-container">
                    <div class="div border rounded bg-white p-3 right-panel">
                        <p class="">User teraktif dalam menjawab</p>
                        <!-- user list -->
                        @for($i=1; $i<=3; $i++)
                        <div class="d-flex my-3">
                            <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg" alt="Arif Satria" width="30px" height="30px" class="my-auto">
                            <div>
                            <a href="" class="text-decoration-none text-dark">
                            <p class="ms-2 my-auto">Arif Satria</p>
                            </a>
                         
                            <p class="ms-2 my-auto">
                            <i class="bi bi-star-fill" style="color: orange;"></i>
                            <small class="text-muted">200 poin</small>
                            </p>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

            </div>
        </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
</html>
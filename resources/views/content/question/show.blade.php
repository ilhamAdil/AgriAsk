<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="modern agriculture community">
    <meta name="author" content="dewasemadi@apps.ipb.ac.id">
    <meta name="theme-color" content="#198754" />
    <title>Community</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">   
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/favicon/site.webmanifest">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
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


    <main id="main-content" class="my-5 content-container-mobile">
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

                <!-- right panel-->
                <div class="col-lg-10 center-container">
                    <!-- detail pertanyaan -->
                    <div class="card detail-question-box">
                        <div class="card-body">
                            <!-- user yang mengajukan pertanyaan -->
                            <div>
                                <div class="d-flex mb-4">
                                    <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                        alt="user" width="60px" height="60px" class="my-auto rounded-circle">
                                    <div class="my-auto ms-2">
                                        <a href="/profile/overview.html" class="text-decoration-none text-dark">
                                            <p class="ms-2 my-auto">{{ $question->user->username }}</p>
                                        </a>
                                        <p class="ms-2 my-auto">
                                            <i class="bi bi-star-fill" style="color: orange;"></i>
                                            <small>
                                                <span class="text-muted align-text-top">40 poin</span>
                                            </small>
                                        </p>
                                    </div>
                                </div>


                                <!-- detail pertanyaan -->
                                <small><span class="text-muted fst-italic">{{ $question->created_at->diffForHumans() }}</span></small>
                                <h5 class="fw-bold question-tittle mt-2">{{ $question->title }}</h5>

                                <p>{{ $question->body }}</p>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text my-auto"><small class="text-muted">
                                    <?php 
                                    $i=0;
                                    foreach($question->tags as $tag){
                                        if($i<4){
                                            echo "#".$tag->tag_name."&nbsp; &nbsp;";
                                        }
                                        else{
                                            echo "#".$tag->tag_name."<br>";
                                            $i=0;   
                                        }
                                        $i++;
                                    }
                                    ?></small></p>
                                    <button class="btn btn-outline-success"><i
                                            class="bi bi-share-fill me-2"></i>Bagikan</button>
                                </div>
                                <!-- tutup detail pertanyaan -->
                            </div>
                            <!-- tutup user yang mengajukan pertanyaan -->

                            <div class="border-bottom my-4"></div>

                            <!-- input jawaban -->
                            <div>
                                <h6 class="mb-4">Jawaban</h6>
                                <div class="d-flex mb-4">
                                    <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                        alt="user" width="60px" height="60px" class="my-auto rounded-circle">
                                    <div class="my-auto ms-2">
                                        <a href=# class="text-decoration-none text-dark">
                                            <p class="ms-2 my-auto">{{ Auth::user()->username }}</p>
                                        </a>
                                        <p class="ms-2 my-auto">
                                            <i class="bi bi-star-fill" style="color: orange;"></i>
                                            <small><span class="text-muted align-text-top">20 poin</span></small>
                                        </p>
                                    </div>
                                </div>

                                <form action="/community/{{ $question->id }}" method="post">
                                @csrf
                                    <div class="mb-0">
                                        <textarea class="form-control text-area-inp-answ" class="message-text text-wrap" name="comment"
                                            placeholder="Tuliskan jawaban Kamu disini"></textarea>
                                    </div>
                                    <button class="btn btn-success mt-4 ms-auto d-block">Kirim Jawaban</button>
                                </form>
                            </div>
                            <!-- tutup input jawaban -->


                            <div class="border-bottom my-4"></div>

                    
                            <!-- tutup user lain -->

                            <!-- jawaban user lain -->
                            @foreach($answers as $answer)
                            <div>
                                <div class="d-flex">
                                    <!-- upvote dan downvote -->
                                    <form>
                                    <div class="d-flex flex-column my-auto">
                                        <i class="bi bi-caret-up-fill upvote" style="font-size:1.5rem;"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Upvote. Jawaban ini membantu"></i>
                                        <p class="fs-4 mb-0 mx-auto">0</p>
                                        <i class="bi bi-caret-down-fill downvote" style="font-size:1.5rem;"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Downvote. Jawaban ini kurang membantu"></i>
                                    </div>
                                    </form>
                                    <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                        alt="user" width="60px" height="60px" class="my-auto rounded-circle ms-3">
                                    <div class="my-auto ms-2">
                                        <a href="/profile/overview.html" class="text-decoration-none text-dark">
                                             @foreach($answer->users as $user) 
                                            <p class="ms-2 my-auto">{{ $user->username }}</p>
                                             @endforeach
                                        </a>
                                        <p class="ms-2 my-auto">
                                            <i class="bi bi-star-fill" style="color: orange;"></i>
                                            <small><span class="text-muted align-text-top">30 poin</span>
                                            </small>
                                        </p>
                                    </div>
                                </div>

                                <small><span class="text-muted align-text-top ms-4 fst-italic ms-5 time-answered">{{ $answer->created_at->diffForHumans() }}</span></small>


                                <div class="ms-5 mt-2 answered-container">
                                    <p class="answered-box rounded p-3">{{ $answer->body }}</p>
                                </div>
                            </div>

                            <div class="border-bottom my-4"></div>
                            @endforeach
                            <!-- tutup user lain -->
                            
                            <!-- tutup user lain -->
                        </div>
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


</body>

</html>
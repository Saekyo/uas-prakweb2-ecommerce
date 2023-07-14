<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SH E-Commerce | Team Page</title>

    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-light" style="padding: 0 !important">
        <div class="container">
            <a class="navbar-brand text-decoration-none text-black" href="/show">
                <h1 class="text-logo">SH</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/show">Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">Tentang Kami</a>
                    </li>
                </ul>
                <div class="slicing-color"></div>
                @if (Route::has('login'))
                    @auth
                        <a class="btn btn-light" href="{{ route('logout') }}">
                            <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                            Keluar
                        </a>
                    @else
                        <a class="btn btn-light" href="/login">
                            <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                            Masuk
                        </a>
                        @if (Route::has('register'))
                            <a class="btn btn-light" href="/register">
                                <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                                Daftar
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 12rem">
        <div class="row text-center ">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4">Team Page</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row text-center">

            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./assets/img/team/arman.png" alt=""
                        width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Muhammad Arman Fatimi</h5><span
                        class="small text-uppercase text-muted">0110222263</span>

                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./assets/img/team/amar.jpeg" alt=""
                        width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Muhammad Iffatul Ammar</h5><span
                        class="small text-uppercase text-muted">0110222051</span>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 mb-5">
                <div style="height: 100%" class="bg-white rounded shadow-sm py-5 px-4"><img
                        src="./assets/img/team/zidann.png" alt="" width="100"
                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Muhammad Zidan</h5><span
                        class="small text-uppercase text-muted">0110222280</span>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 mb-5">
                <div style="height: 100%" class="bg-white rounded shadow-sm py-5 px-4 "><img
                        src="./assets/img/team/reski.jpeg" alt="" width="100"
                        class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Reski Junaidi Shalat</h5><span
                        class="small text-uppercase text-muted">0110222210</span>

                </div>
            </div>
        </div>
    </div>

</body>
<footer class="fixed-bottom">
    <div class="icon-sosmed">
        <div style="width: 50px; height: 50px; background-color: white; border-radius: 40px;">
            <img src="assets/img/homepage/instagram.svg" width="25px" style="margin-top: 12px;">
        </div>
        <div style="width: 50px; background-color: white; border-radius: 40px;">
            <img src="assets/img/homepage/envelope.svg" width="25px" style="margin-top: 12px;">
        </div>
        <div style="width: 50px; background-color: white; border-radius: 40px;">
            <img src="assets/img/homepage/telephone.svg" width="25px" style="margin-top: 12px;">
        </div>
    </div>
    <p class="alamat">Spare Part Handphone E-Commerce</p>
</footer>

</html>

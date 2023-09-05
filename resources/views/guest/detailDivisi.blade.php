<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>HIMTIF Politeknik Purbaya | Divisi</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logos/logo HIMTIF.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logos/logo HIMTIF.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logos/logo HIMTIF.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logos/logo HIMTIF.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/logos/logo HIMTIF.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('guest/vendors/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('guest/assets/css/user.css') }}" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a href="index.html">
                    <img class="navbar-brand" style="width: 50px;" src="assets/img/logos/logo.png" alt="">
                </a>
                <h1 class="fs-1 text-success">Politeknik Purbaya</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/#kepengurusan">Kepengurusan</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/#divisi">Divisi</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/#album">Album</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="assets/img/hero/hero-bg.png" alt="" />

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section>
                <div class="container">
                    <div class="row align-items-center py-lg-8 py-6">
                        <div class="col-lg-6 text-center text-lg-start">
                            <span class="fs-7 text-primary">HIMTIF</span>
                            <h1 class="text-white fs-5 fs-xl-7">POLITEKNIK PURBAYA</h1>
                            <div class="d-sm-flex justify-content-center align-items-center gap-3">
                                <a href="#PENDIDIKAN" class="w-sm-50 w-lg-100"><button class="btn btn-outline-success text-center w-100 mb-3 fw-bold fs-3">{{ $dataDivisi->divisi }}</button>
                            </div></a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-center mt-3 mt-lg-0"><img class="img-fluid w-75 rounded-4" src="{{ asset('storage/'.$dataDivisi->foto_divisi) }}" alt="" /></div>
                        </div>
                    </div>
                    <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
            </div>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="mt-0" id="PENDIDIKAN">
                <div class="container">
                    <div class="border-bottom border-dark py-5">
                        <h1 class="fs-lg-6 fs-md-5 fs-4 text-center mb-5">Ketua Divisi Pendidikan</h1>
                        <div class="row align-items-center gx-xl-7">
                            <div class="col-lg-6 text-center">
                                <a href="#"><img class="img-fluid rounded-3" src="{{ asset('storage/'.$dataKetuaDivisi->foto_anggota) }}" alt="" /></a>
                            </div>
                            <div class="col-lg-6 mt-5 mt-lg-0 text-center text-lg-start">
                                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                                    <p class="mb-0 fs-2">{{ $dataDivisi->divisi }}</p>
                                </div>
                                <a href="#">
                                    <h1 class="fs-xl-6 fs-md-4 fs-3 my-3 fw-bold">{{ $dataKetuaDivisi->nama }}</h1>
                                </a>
                                <!-- <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-2"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" />
                                <a href="#">
                                    <p class="mb-0">Chandler Bing</p>
                                </a>
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->




            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-0 bg-soft-secondary">
                <div class="container">
                    <h1 class="fs-lg-6 fs-md-5 fs-4 text-center">Anggota Divisi Pendidikan</h1>
                    <div class="row mt-5 gx-xl-7">
                        {{-- ************************************ --}}
                        @foreach($anggotaDivisi as $row)
                        <div class="col-lg-4 col-md-6 mb-5 mb-md-0 text-center text-md-start h-auto">
                            <div class="h-100 text-center">
                                <a href="#"><img class="w-md-100 w-75 rounded-2" src="{{ asset('storage/'.$row->foto_anggota) }}" alt="" /></a>
                                <div class="gap-2 mt-3">
                                    <p class="mb-0">{{ $dataDivisi->divisi }}</p>
                                </div>
                                <a href="#">
                                    <h5 class="mt-1 mb-3 fs-0 fs-md-1 fw-bold">{{ $row->nama }}</h5>
                                </a>
                                <div class="gap-3 mb-md-5"><img class="img-fluid" src="assets/img/blog/profile1.png" alt="" />
                                    <!-- <a href="#">
                                        <p class="mb-0 text-gray">Chandler Bing</p>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- ************************************* --}}
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-0 pt-0" id="contact">

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="fw-bold fs-1 mt-5 mb-4">HIMTIF POLITEKNIK PURBAYA</h4>
                    <p class="w-lg-75 text-gray text-justify my-3">Himtif sebagai wadah mewujudkan Mahasiswa aktif, solutif, responsive, dan proaktif khususnya Mahasiswa Jurusan Teknik Informatika Politeknik Purbaya.</p>
                </div>
                <div class="col-6">
                    <h3 class="fw-bold fs-1 mt-5 mb-4">Contact Person</h3>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="#">Politeknik Purbaya</a>
                        </li>
                        <li class="my-3"><a href="#">Himtif</a></li>
                        <li class="my-3"><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div>
                    <map>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253.3222533359323!2d109.13067983221289!3d-6.969666731648324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbf2a72177f0d%3A0xa572b3eb6c148b47!2sKAMPUS%202%20POLITEKNIK%20PURBAYA%20TEGAL!5e1!3m2!1sid!2sid!4v1691819463697!5m2!1sid!2sid
                        " width="100% " height="350 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
                        </map>
                </div>
            </div>
            <p class="text-gray">HIMTIF@_2023</p>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('guest/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('guest/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('guest/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('guest/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('guest/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('guest/vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('guest/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('guest/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('guest/assets/js/theme.js') }}"></script>

</body>

</html>
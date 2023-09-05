<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>HIMTIF | Politeknik Purbaya</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="guest/assets/img/logos/logo HIMTIF.png">
    <link rel="icon" type="image/png" sizes="32x32" href="guest/assets/img/logos/logo HIMTIF.png">
    <link rel="icon" type="image/png" sizes="16x16" href="guest/assets/img/logos/logo HIMTIF.png">
    <link rel="shortcut icon" type="image/x-icon" href="guest/assets/img/logos/logo HIMTIF.png">
    <link rel="manifest" href="guest/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="guest/assets/img/logos/logo HIMTIF.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700 &amp;display=swap" rel="stylesheet">
    <link href="guest/vendors/prism/prism.css" rel="stylesheet">
    <link href="guest/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="guest/assets/css/theme.css" rel="stylesheet" />
    <link href="guest/assets/css/user.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a href="index.html">
                    <img class="navbar-brand" style="width: 50px;" src="guest/assets/img/logos/logo.png" alt="">
                </a>
                <h1 class="fs-1 text-success">Politeknik Purbaya</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#top">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#kepengurusan">Kepengurusan</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#divisi">Divisi</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#album">Album</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="guest/assets/img/hero/hero-bg.png" alt="" />


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section>

                <div class="container">
                    <div class="row align-items-center py-lg-8 py-6">
                        <div class="col-lg-6 text-center text-lg-start">
                            <span class="fs-7 text-primary">HIMTIF</span>
                            <h1 class="text-white fs-5 fs-xl-7">POLITEKNIK PURBAYA</h1>
                            <div class="d-sm-flex justify-content-center align-items-center gap-3">
                                <button class="btn btn-outline-success text-center mb-3 w-sm-50 w-lg-100">Daftar</button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid " src="{{ asset('storage/'.$siteSetting->foto_logo) }}" alt="" /></div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center"><img src="guest/assets/img/logos/Pendidikan.svg" alt="" /></div>
                                <div class="swiper-slide text-center"><img src="guest/assets/img/logos/kOMINFO.svg" alt="" /></div>
                                <div class="swiper-slide text-center"><img src="guest/assets/img/logos/Soskem.svg" alt="" /></div>
                                <div class="swiper-slide text-center"><img src="guest/assets/img/logos/kOMINFO.svg" alt="" /></div>
                                <div class="swiper-slide text-center"><img src="guest/assets/img/logos/Pendidikan.svg" alt="" /></div>
                                <div class="swiper-slide text-center"><img src="guest/assets/img/logos/Soskem.svg" alt="" /></div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->

        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="about">

            <div class="container">
                <div class="text-center mb-4 "><span class="fs-5">About</span></div>
                <img class="img-fluid rounded-4" src="{{ asset('storage/'.$siteSetting->foto_angkatan) }}" alt="" />
                <div class="row mt-4 align-items-center">
                    <div class="col-md-6">
                        <h2 class="fs-md-2 fs-2 pt-2 text-justify">
                            {!! $siteSetting->sejarah !!}
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item"></div>
                            <h2 class="accordion-header border-bottom" id="srgdgfdgdgg45">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#srgdgfdgdgg45tyuu" aria-expanded="false" aria-controls="srgdgfdgdgg45"><span class="fs-2 pe-3">Visi HIMTIF</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="srgdgfdgdgg45" data-bs-parent="#accordionFlushExample" id="srgdgfdgdgg45tyuu">
                                <div class="accordion-body">
                                    <p class="mb-0 fs-1">
                                        {!! $siteSetting->visi !!}
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item"></div>
                            <h2 class="accordion-header border-bottom" id="sxvdgrfhfh276">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#srgdgfdgdgg45tyuu5ghj" aria-expanded="false" aria-controls="sxvdgrfhfh276"><span class="fs-2 pe-3">Misi HIMTIF</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="sxvdgrfhfh276" data-bs-parent="#accordionFlushExample" id="srgdgfdgdgg45tyuu5ghj">
                                <div class="accordion-body">
                                    
                                    {!! $siteSetting->misi !!}

                                </div>
                            </div>
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
        <section class="bg-soft-secondary" id="kepengurusan">
            <div class="container">
                <p class="text-center fs-5">Badan Pengurus Harian HIMTIF</p>
                <h2 class="mx-auto text-center fs-lg-5 w-lg-75">Himpunan Teknik Informatika Politeknik Purbaya</h2>
                <div class="text-center">
                    <a class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none text-center" href="bph.html">Lihat Detail<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>

                <div class="gallery-wraper pb-2 mt-6">
                    <div class="img-wraper"><img class="img-fluid" src="{{ asset('storage/'.$siteSetting->foto_ketua) }}" alt="" /></div>
                    <div class="img-wraper"><img class="img-fluid w-100" src="guest/assets/img//user/BPH/Periode.png" alt="" /></div>
                    <div class="img-wraper"><img class="img-fluid" src="{{ asset('storage/'.$siteSetting->foto_wakil) }}" alt="" /></div>
                    <div class="img-wraper"><img class="img-fluid" src="{{ asset('storage/'.$siteSetting->foto_bendahara) }}" alt="" /></div>
                    <div class="img-wraper"><img class="img-fluid" src="{{ asset('storage/'.$siteSetting->foto_sekretaris) }}" alt="" /></div>
                </div>
            </div>
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="divisi">
            <div class="container">
                <p class="text-center fs-5">Divisi Pengurus HIMTIF</p>
                <h2 class="mx-auto text-center fs-lg-5 w-lg-75">Himpunan Teknik Informatika Politeknik Purbaya</h2>
                <div class="row gx-xl-7 mt-5">
                    @foreach($dataDivisi as $divisi)
                    <div class="col-md-4 mb-6 mb-md-0 text-center text-md-start">
                        <img class="w-50 w-md-100 rounded-3" src="{{ asset('storage/'.$divisi->foto_divisi) }}" alt="{{ $divisi->divisi }}" />
                        <h4 class="mt-3 my-1 text-uppercase fw-semi-bold text-center">{{ $divisi->divisi }}</h4>
                        <p class="fs-1 mb-0 text-justify">{{ $divisi->deskripsi }}</p>
                        <a class="text-dark fs-1 pb-2 fw-bold border-black border-bottom text-decoration-none" href="/divisi/{{ $divisi->id }}">Lihat Detail<i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-dark pt-6" id="album">

            <div class="container">
                <div class="col-md-4">
                    <h1 class="text-white fs-lg-5 fs-md-3 fs-1">Galery HIMTIF</h1>
                    <span class="fs-2">Himpunan Teknik Informatika Politeknik Purbaya</span>
                </div>
                <div class="swiper mt-7">
                    <div class="p-2"></div>
                    <div class="swiper-container swiper-theme" data-swiper='{"slidesPerView":1,"breakpoints":{"640":{"slidesPerView":1,"spaceBetween":10},"768":{"slidesPerView":2,"spaceBetween":10},"1025":{"slidesPerView":3,"spaceBetween":40}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"navigation":{"nextEl":".swiper-button-next","prevEl":".swiper-button-prev"},"loop":true,"freeMode":true,"loopedSlides":3}'>
                        <div class="swiper-wrapper">
                            {{-- ********************************* --}}
                            @foreach ($dataProker as $proker)
                            <div class="swiper-slide bg-white p-5 rounded-3 h-auto">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <img class="img-fluid rounded-3 h-50" src="{{ asset('storage/'.$proker->thumbnail) }}" alt="">
                                    <div class="d-flex align-items-center gap-3 mt-3"><img style="width: 80px;" src="{{ asset('storage/'.$proker->logo_divisi) }}" alt="" />
                                        <div class="text-black">
                                            <p class="mb-0 fw-bold text-dark">{{ $proker->proker }}</p><small>{{ $proker->divisi }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- ********************************** --}}
                        </div>
                    </div>
                    <div class="swiper-button-next"><span class="fas fa-arrow-right fs-lg-3 fs-2"></span></div>
                    <div class="swiper-button-prev"><span class="fas fa-arrow-left fs-lg-3 fs-2"></span></div>
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
    <section class="pb-0 pt-2" id="contact">

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="fw-bold fs-1 mt-5 mb-4">HIMTIF POLITEKNIK PURBAYA</h4>
                    <p class="w-lg-75 text-gray text-justify my-3">
                        {!! $siteSetting->visi !!}
                    </p>
                </div>
                <div class="col-6">
                    <h3 class="fw-bold fs-1 mt-5 mb-4">Contact Person</h3>
                    
                    {!! $siteSetting->kontak !!}
                    
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
    <script src="guest/vendors/popper/popper.min.js "></script>
    <script src="guest/vendors/bootstrap/bootstrap.min.js "></script>
    <script src="guest/vendors/anchorjs/anchor.min.js "></script>
    <script src="guest/vendors/is/is.min.js "></script>
    <script src="guest/vendors/fontawesome/all.min.js "></script>
    <script src="guest/vendors/lodash/lodash.min.js "></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll "></script>
    <script src="guest/vendors/prism/prism.js "></script>
    <script src="guest/vendors/swiper/swiper-bundle.min.js "></script>
    <script src="guest/assets/js/theme.js "></script>

</body>

</html>
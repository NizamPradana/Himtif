<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }} | HIMTIF Politeknik Purbaya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/admin/assets/img/favicon.png" rel="icon">
  <link href="/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.4.2/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/admin/assets/css/style.css" rel="stylesheet">

  {{-- trix editor assets --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }
  </style>

  {{-- <script src="/js/main.js"></script> --}}

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/admin/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">HIMTIF</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              Welcome back! <b>{{ auth()->user()->nama }}</b>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->nama }}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form action="/logout" method="post">
                @csrf 
              <button class="dropdown-item d-flex align-items-center" type="submit">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </button>
                
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ $title == 'Dashboard' ? '' : 'collapsed' }}" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link {{ $title == 'BPH' ? '' : 'collapsed' }}" href="/bph">
          <i class="bi bi-diagram-3-fill"></i>
          <span>Kelola BPH</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ $title == 'Divisi' ? '' : 'collapsed' }}" href="/divisi">
          <i class="bi bi-people-fill"></i>
          <span>Kelola Divisi</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ $title == 'Site Settings' ? '' : 'collapsed' }}" href="/site">
          <i class="bi bi-gear"></i>
          <span>Pengaturan Site</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ $title == 'Proker' ? '' : 'collapsed' }}" href="/proker">
          <i class="bi bi-journal-check"></i>
          <span>Proker</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          @foreach ($errors->all() as $error)
            {{ $error }}
          @endforeach
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>HIMTIF</span></strong>
    </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/admin/assets/vendor/quill/quill.min.js"></script>
  <script src="/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/admin/assets/js/main.js"></script>

  {{-- nonaktifkan file upload trix editor --}}
  <script>
    document.addEventListener('trix-file-upload', function (e){
      e.preventDefault()
    })
  </script>

</body>

</html>
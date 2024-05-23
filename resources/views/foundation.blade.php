<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  <title>Base</title>
</head>

<body>

  {{-- Navbar Base --}}
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/">Dashboard</a>
    <!-- Sidebar Toggle-->

    <button class="btn btn-link btn-sm order-1" id="sidebarToggle" href="#!"><svg class="svg-inline--fa fa-bars"
        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg>
        <path fill="currentColor"
          d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
        </path>
      </svg><!-- <i class="fas fa-bars"></i> Font Awesome fontawesome.com --></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group"></div>
    </form>


    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        {{-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"> --}}
          {{-- <svg class="svg-inline--fa fa-user fa-fw" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
            data-fa-i2svg>
            <path fill="currentColor"
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
            </path>
          </svg> --}}
          <!-- <i class="fas fa-user fa-fw"></i> Font Awesome fontawesome.com --></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Profile</a></li>
          {{-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> --}}
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#!">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>


  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Umum</div>
            <a class="nav-link" href="/">
              <div class="sb-nav-link-icon"><i class="bi bi-house-door-fill"></i></div>
              Halaman Utama
            </a>
            <a class="nav-link" href="/about">
              <div class="sb-nav-link-icon"><i class="bi bi-info-circle-fill"></i></div>
              Tentang
            </a>


            <div class="sb-sidenav-menu-heading">Monitoring</div>
            <a class="nav-link" href="/live">
              <div class="sb-nav-link-icon"><i class="bi bi-camera-video-fill"></i></div>
              Live
            </a>
            <a class="nav-link" href="/table">
              <div class="sb-nav-link-icon"><i class="bi bi-table"></i> </div>
              Tabel
            </a>
          </div>
      </nav>
    </div>
    @yield('frame')
  </div>
</body>

</html>

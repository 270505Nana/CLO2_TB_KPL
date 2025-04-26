<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href={{ asset('assets/img/brain.png') }}>
  <link rel="icon" type="image/png" href= {{ asset('assets/img/brain.png') }}>
  <title>
    Manajemen Perpustakaan
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href={{ asset('assets/css/argon-dashboard.css?v=2.1.0') }} rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">

        <img src={{ asset('assets/img/brain-bg.png') }} width="35px" height="35px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Manajemen Perpustakaan</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

    {{-- NAVBAR --}}
    {{-- navbar nnti dibikin full --}}
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">

        {{-- list navbar item --}}
        {{-- list navbar item --}}
        <li class="nav-item">
          <a class="nav-link active" href="/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          {{-- HREF DIUBAH! --}}
          <a class="nav-link " href="/databuku">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Buku</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/datamahasiswa">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Mahasiswa</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/datapeminjaman">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Peminjaman</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
      <div class="container-fluid py-1">
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-top mt-4">
      <div class="card-body p-3">
        <div class="row gx-5">
         
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Form Tambah Data Mahasiswa
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- card form tambah data bukunya --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12 mr-3 ml-3">
          <div class="card">

            {{-- button atas --}}
            <div class="card-header pb-0">
              {{-- BUTTON SEND DATA --}}
              {{-- button juga pake tipe yang post ya, buat ngirim data. --}}
              {{-- klo masih bingung bisa usaha chat gpt aja dulu, nnti klo udah paham sma udh ketemu baru chat grup --}}
              <div class="d-flex align-items-center">
                {{-- <p class="mb-0">Edit Profile</p> --}}
                <button type="submit"  form="form-mahasiswa"  class="btn btn-success btn-sm ms-auto">Tambah Data Mahasiswa</button>
              </div>
            </div>

            {{--CARD FORM  --}}
            <form id="form-mahasiswa" action="{{ route('mahasiswa.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="row">
                  {{-- formmm, nnti diganti jadi post formnya! jgn lupa ya guys --}}
                  <div class="col-md-15">

                    {{-- form judul --}}
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nama mahasiswa</label>
                      <input class="form-control" type="text" name = "nama" placeholder="Masukkan Nama Mahasiswa" id="nama" required value="{{ old('nama') }}">

                        @error('nama')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">NIM Mahasiswa</label>
                      {{-- nana : pastikan id sama nameharus sama kaya ditabel ya klo engga nnti dia ga kekirim ke db --}}
                      <input class="form-control" type="number" name = "nim" placeholder="Masukkan NIM Mahasiswa" id = "nim" required value="{{ old('nim') }}">
                      @error('nim')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Fakultas</label>
                      <input type="text" name="fakultas" class="form-control" placeholder="Masukkan fakultas mahasiswa" required value="{{ old('fakultas') }}">
                      @error('fakultas')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Program Studi</label>
                      <input type="text" name="prodi" class="form-control" placeholder="Masukkan program studi mahasiswa" required value="{{ old('prodi') }}">
                      @error('prodi')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Angkatan/Tahun Masuk Mahasiswa</label>
                      <input type="number" name="angkatan" class="form-control" placeholder="Masukkan tahun masuk mahasiswa" required value="{{ old('angkatan') }}">
                      @error('angkatan')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nomor Handphone Mahasiswa</label>
                      <input type="number" name="nomor_hp" class="form-control" placeholder="Masukkan nomor telepon mahasiswa" required value="{{ old('nomor_hp') }}">
                      @error('nomor_hp')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
     
    </div>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        {{-- <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div> --}}
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src={{ asset('assets/js/core/popper.min.js') }}></script>
  <script src={{ asset('assets/js/core/bootstrap.min.js') }}></script>
  <script src={{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}></script>
  <script src={{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src={{ asset('assets/js/argon-dashboard.min.js?v=2.1.0') }}></script>

  
</body>

</html>
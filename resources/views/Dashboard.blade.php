<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Manajemen Perpustakaan</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  {{-- Bootstrap icon --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  {{-- Nucleo Icons --}}
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />

  <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
</head>

{{-- NAVBARRRRRR --}}
<body class="g-sidenav-show  bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header text-center py-3">
      <h5 class="fw-bold mb-0">Manajemen Perpustakaan</h5>
    </div>

    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">
            <i class="ni ni-tv-2 text-dark text-sm opacity-10 me-2"></i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/databuku">
            <i class="ni ni-books text-dark text-sm opacity-10 me-2"></i>
            <span class="nav-link-text ms-1">Data Buku</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/datamahasiswa">
            <i class="ni ni-hat-3 text-dark text-sm opacity-10 me-2"></i>
            <span class="nav-link-text ms-1">Data Mahasiswa</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/datapeminjaman">
            <i class="ni ni-basket text-dark text-sm opacity-10 me-2"></i>
            <span class="nav-link-text ms-1">Data Peminjaman</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>

        <ul class="navbar-nav d-flex flex-row align-items-center">
          <li class="nav-item d-xl-none ps-3">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>

          <li class="nav-item px-3">
            <a href="javascript:;" class="nav-link text-white p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>

          <li class="nav-item dropdown pe-2">
            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-bell cursor-pointer"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-4">
          <div class="card p-3">
            <div class="row align-items-center">
              <div class="col-8">
                <p class="text-sm mb-0 font-weight-bold">Jumlah buku</p>
                <h5 class="font-weight-bolder">{{ $jumlahBuku }}</h5>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle mx-auto">
                  <i class="ni ni-books text-white text-m opacity-100"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col-xl-4 col-sm-6 mb-4">
          <div class="card p-3">
            <div class="row align-items-center">
              <div class="col-8">
                <p class="text-sm mb-0 font-weight-bold">Jumlah mahasiswa</p>
                <h5 class="font-weight-bolder">{{ $jumlahMahasiswa }}</h5>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle mx-auto">
                  <i class="ni ni-hat-3 text-white text-m opacity-100"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="col-xl-5 col-sm-6 mb-4">
          <div class="card p-3">
            <div class="row align-items-center">
              <div class="col-8">
                <p class="text-sm mb-0 font-weight-bold">Jumlah data peminjaman</p>
                <h5 class="font-weight-bolder">{{ $jumlahPeminjam }}</h5>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle mx-auto">
                  <i class="ni ni-book-bookmark text-white text-m opacity-100"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row mt-3 d-flex justify-content-center">
        <div class="col-lg-12 mb-4">
          <div class="card">
            <div class="card-header pb-0 p-3 text-center">
              <h6 class="mb-2">Data Buku Perpustakaan</h6>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center">
                <tbody class="table-group-divider ml-3">
                  @foreach ($bukus as $buku)
                    <tr>
                      <td class="w-30">
                        <div class="d-flex align-items-center px-2 py-1">
                          <div class="ms-3">
                            <p class="text-xs font-weight-bold mb-0">Judul buku:</p>
                            <h6 class="text-sm mb-0">{{ $buku->judul }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="ms-3">
                          <p class="text-xs font-weight-bold mb-0">Penulis:</p>
                          <h6 class="text-sm mb-0">{{ $buku->penulis }}</h6>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </main>
  
  <!--   Core JS Files   -->
  <script src={{ asset('assets/js/core/popper.min.js') }}></script>
  <script src={{ asset('assets/js/core/bootstrap.min.js') }}></script>
  <script src={{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}></script>
  <script src={{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}></script>
  <script src={{ asset('assets/js/plugins/chartjs.min.js') }}></script>

  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
</body>
</html>
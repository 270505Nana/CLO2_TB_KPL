<!DOCTYPE html>
<html lang="en">

{{-- HEADER --}}
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href={{ asset('assets/img/brain.png') }}>
  <link rel="icon" type="image/png" href={{ asset('assets/img/brain.png') }}>
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

<body class="g-sidenav-show   bg-gray-100">
  {{-- warna header atas --}}
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{ asset('assets/img/brain-bg.png') }}" width="25px" height="25px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-0 font-weight">Manajemen Perpustakaan</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">

    {{-- NAVBAR --}}
    {{-- navbar nnti dibikin full --}}
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/databuku">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Buku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/datamahasiswa">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-hat-3 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/datapeminjaman">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-basket text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Peminjaman</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar atas pencarian & sign in serta nama page-->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables Mahasiswa</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables Data Mahasiswa</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Cari.....">
            </div>
          </div>

          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">

            {{-- CARD ATAS --}}
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Tabel Mahasiswa</h6>
              <a class="btn btn-success btn-sm" href="/tambahdatabuku">Tambah Mahasiswa</a>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" > NIM</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7"> Nama mahasiswa</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7"> Program Studi mahasiswa</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7"> Fakultas mahasiswa</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7"> Angkatan</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7"> Nomor HP</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7"> Aksi</th>
                    </tr>
                  </thead>
<<<<<<< HEAD
                  <tbody class="table-group-divider ml-3" id="dataMahasiswa">
=======
                  <tbody class="table-group-divider ml-16">
>>>>>>> nana-update-mahasiswa
                    {{-- disesuaikan dengan yang di controller dll yang sudah disetting sblumnya --}}
                    {{-- @foreach ($mahasiswas as $mhs)
                    <tr>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $mhs->nim }}</td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $mhs->prodi }}</p></td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $mhs->nama }}</td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $mhs->fakultas }}</td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $mhs->angkatan }}</td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $mhs->nomor_hp }}</td>
                      <td class="align-middle">
                        <a href="/editmahasiswa/{{ $mhs->id }}" class="text-secondary mx-2">
                          <i class="ni ni-ruler-pencil text-lg" aria-hidden="true"></i>
                        </a>
                        <button class="btn-delete text-secondary mx-1" 
                          data-nim="{{ $mhs->nim }}" 
                          style="background: none; border: none; padding: 0; cursor: pointer;">
=======
                        <a href="" class="text-secondary mx-2" onclick="return confirm('Yakin mau hapus?')">
>>>>>>> nana-update-mahasiswa
                          <i class="ni ni-fat-remove text-lg" aria-hidden="true"></i>
                      </button>

                      </td>
                    </tr>
                    @endforeach --}}


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
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
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  <!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
 document.addEventListener('DOMContentLoaded', function () {
      fetch('/api/mahasiswa')
          .then(response => response.json())
          .then(data => {
              const tableBody = document.querySelector('tbody');
              tableBody.innerHTML = '';
  
              if (data.data.length > 0) {
                  data.data.forEach(mahasiswa => {
                      const tr = document.createElement('tr');
  
                      tr.innerHTML = `
                          <td><p class="text-xs font-weight-bold mb-0">${mahasiswa.nim}</p></td>
                          <td><p class="text-xs font-weight-bold mb-0">${mahasiswa.nama}</p></td>
                          
                          <td><p class="text-xs font-weight-bold mb-0">${mahasiswa.prodi}</p></td>
                          <td><p class="text-xs font-weight-bold mb-0">${mahasiswa.fakultas}</p></td>
                          <td><p class="text-xs font-weight-bold mb-0">${mahasiswa.angkatan}</p></td>
                          <td><p class="text-xs font-weight-bold mb-0">${mahasiswa.nomor_hp}</p></td>
                        
                          <td class="align-middle text-center">
                              <a href="/editmahasiswa/${mahasiswa.nim}" class="text-secondary font-weight-bold text-xs me-2" data-toggle="tooltip" title="Edit Mahasiswa">
                                  <i class="ni ni-ruler-pencil text-lg opacity-10"></i>
                              </a>
                              <button class="btn-delete text-secondary mx-2" 
                                  data-nim="${mahasiswa.nim}" 
                                  style="background: none; border: none; padding: 0; cursor: pointer;">
                                  <i class="ni ni-fat-remove text-lg" aria-hidden="true"></i>
                              </button>
                          </td>
                      `;
  
                      tableBody.appendChild(tr);
                  });
  
                  const deleteButtons = document.querySelectorAll('.btn-delete');
  
                  deleteButtons.forEach(button => {
                      button.addEventListener('click', function () {
                          const nim = this.getAttribute('data-nim');
  
                          Swal.fire({
                              title: 'Warning',
                              text: "Apakah Anda yakin ingin menghapus data mahasiswa dengan NIM: " + nim + "?",
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Hapus'
                          }).then((result) => {
                              if (result.isConfirmed) {
                                  fetch(`/api/mahasiswa/delete/${nim}`, {
                                      method: 'DELETE',
                                      headers: {
                                          'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                          'Accept': 'application/json'
                                      }
                                  })
                                  .then(response => response.json())
                                  .then(data => {
                                      if (data.status === 'success') {
                                          Swal.fire(
                                              'Deleted!',
                                              data.messages,
                                              'success'
                                          ).then(() => {
                                              location.reload(); // Reload the page after deletion
                                          });
                                      } else {
                                          Swal.fire(
                                              'Error!',
                                              data.messages,
                                              'error'
                                          );
                                      }
                                  })
                                  .catch(error => {
                                      Swal.fire(
                                          'Error!',
                                          'Something went wrong!',
                                          'error'
                                      );
                                      console.error('Error:', error);
                                  });
                              }
                          });
                      });
                  });
              } else {
                  tableBody.innerHTML = '<tr><td colspan="5" class="text-center">Tidak ada data mahasiswa.</td></tr>';
              }
          })
          .catch(error => {
              console.error('Error fetching mahasiswa data:', error);
          });
  });
  </script>
</script>

</body>

</html>
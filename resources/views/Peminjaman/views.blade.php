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
  <!-- Fonts and icons -->
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
  {{-- Warna header atas --}}
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
          <a class="nav-link" href="/datamahasiswa">
            <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-hat-3 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/datapeminjaman">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Peminjaman</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Data Peminjaman</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Cari.....">
            </div>
          </div>
        </div>
        {{-- button sign in --}}
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
          </li>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            {{-- CARD ATAS --}}
            <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Tabel Data Peminjaman</h6>
            <a class="btn btn-success btn-sm" href="/tambahpeminjaman">Tambah Peminjaman</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover align-items-center mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" >ID Buku</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" >Nama Mahasiswa</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" >Judul Buku</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" >Tanggal Pinjam</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" >Tanggal Kembali</th>
                      <th scope="col" class="text-secondary text-xxs font-weight-bolder opacity-7" >Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    @foreach ($peminjamans as $peminjaman)
                    <tr>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->id_buku }}</p></td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->mahasiswa->nama }}</p></td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->buku->judul }}</p></td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->tanggal_pinjam }}</p></td>
                      <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->tanggal_kembali }}</p></td>
                      <td class="align-middle">
                        <a href="/editpeminjaman/{{ $peminjaman->id_buku }}" class="text-secondary mx-2">
                          <i class="ni ni-ruler-pencil text-lg" aria-hidden="true"></i>
                        </a>
                     
                        <button class="btn-delete text-danger mx-2" 
                                data-id="{{ $peminjaman->id }}" 
                                style="background: none; border: none; padding: 0; cursor: pointer;">
                            <i class="ni ni-fat-remove text-lg" aria-hidden="true"></i>
                        </button>
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
    </div>
  </main>

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
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.btn-delete');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Warning',
                    text: "Apakah Anda yakin ingin menghapus data peminjaman ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                      fetch(`/api/peminjaman/delete/${id}`, {
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
                                    location.reload();
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
                            Swal.fire('Error!', 'Terjadi kesalahan saat menghubungi server.', 'error');
                            console.error('Error:', error);
                        });
                    }
                });
            });
        });
    });
</script>
</body>

</html>
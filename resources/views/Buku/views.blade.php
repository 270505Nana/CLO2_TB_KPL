<!DOCTYPE html>
<html lang="en">

{{-- HEADER --}}
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/brain.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/brain.png') }}">
  <title>Manajemen Perpustakaan</title>
  
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  {{-- Sidenav --}}
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{ asset('assets/img/brain-bg.png') }}" width="25px" height="25px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-0 font-weight">Manajemen Perpustakaan</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    
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
          <a class="nav-link active" href="/databuku">
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

  {{-- Main Content --}}
  <main class="main-content position-relative border-radius-lg">
    {{-- Navbar --}}
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-0 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Buku</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Data Buku</h6>
        </nav>

        {{-- <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search"></i></span>
              <input type="text" class="form-control" placeholder="Cari.....">
            </div>
          </div>

          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="/login" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>

        </div> --}}
      </div>
    </nav>

    {{-- Table Content --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Tabel Data Buku</h6>
              <a class="btn btn-success btn-sm" href="/tambahdatabuku">Tambah Buku</a>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Buku</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penulis</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penerbit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahun Terbit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Genre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="dataBuku">
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Include SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // buat megambil data buku
    fetch('/api/buku')
    .then(response => response.json())
    .then(data => {
        const tableBody = document.querySelector('tbody');
        tableBody.innerHTML = '';

        if (data.data.length > 0) {
            data.data.forEach(buku => {
                const tr = document.createElement('tr');

                tr.innerHTML = `
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${buku.judul}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${buku.penulis}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${buku.penerbit}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${buku.tahun_terbit}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${buku.genre}</p></td>
                    <td class="align-middle mb-0 ps-3">
                        <a href="/editbuku/${buku.id}" class="text-secondary font-weight-bold text-xs me-0" data-toggle="tooltip" title="Edit Buku">
                          <i class="ni ni-ruler-pencil text-lg opacity-10"></i>
                        </a>
                        <button class="btn-delete text-secondary mx-2" 
                          data-id="${buku.id}" 
                          style="background: none; border: none; padding: 0; cursor: pointer;">
                          <i class="ni ni-fat-remove text-lg" aria-hidden="true"></i>
                        </button>
                    </td>
                `;

                tableBody.appendChild(tr);
            });

            // button buat delete buku
            const deleteButtons = document.querySelectorAll('.btn-delete');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Warning',
                        text: "Apakah Anda yakin ingin menghapus data buku ini?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Hapus'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(`/api/buku/delete/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    Swal.fire('Deleted!', data.messages, 'success').then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire('Error!', data.messages, 'error');
                                }
                            })
                            .catch(error => {
                                Swal.fire('Error!', 'Something went wrong!', 'error');
                                console.error('Error:', error);
                            });
                        }
                    });
                });
            });
        } else {
            tableBody.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center text-secondary">Tidak ada data buku.</td>
                </tr>
            `;
        }
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
});

</script>

</body>
</html>

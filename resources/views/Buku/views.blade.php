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

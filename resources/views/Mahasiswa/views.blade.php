<!DOCTYPE html>
<html lang="en">

  {{-- HEADER --}}
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manajemen Perpustakaan</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
  </head>

  <body class="g-sidenav-show   bg-gray-100">
    {{-- warna header atas --}}
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
      @include('layouts.sidebar')

      <main class="main-content position-relative border-radius-lg ">
        @include('layouts.navbar')

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">

            {{-- CARD ATAS --}}
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Tabel Mahasiswa</h6>
              <a class="btn btn-success btn-sm" href="{{route('tambah.mahasiswa')}}">Tambah Mahasiswa</a>
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
                    <tbody class="table-group-divider ml-3" id="dataMahasiswa"></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    @include('layouts.footer')

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
                                  <a href="/editmahasiswa/${mahasiswa.nim}" class="text-secondary font-weight-bold" data-toggle="tooltip" title="Edit Mahasiswa">
                                      <i class="bi bi-pencil-square"></i>
                                  </a>
                                  <button class="btn-delete text-secondary mx-2" 
                                      data-nim="${mahasiswa.nim}" 
                                      style="background: none; border: none; padding: 0; cursor: pointer;">
                                      <i class="bi bi-trash3-fill"></i>
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

  </body>

</html>
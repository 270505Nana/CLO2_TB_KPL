@extends('layouts.master')

@section('page-title', 'Data Peminjaman')

@section('content')
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
                <tbody class="table-group-divider" id="dataPeminjaman">
                  {{-- @foreach ($peminjamans as $peminjaman)
                  <tr>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->id_buku }}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->mahasiswa->nama }}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ $peminjaman->buku->judul }}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ \Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->translatedFormat('d F Y') }}</p></td>
                    <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">{{ \Carbon\Carbon::parse($peminjaman->tanggal_kembali)->translatedFormat('d F Y') }}</p></td>
                    <td class="align-middle">
                      <a href="/editpeminjaman/{{ $peminjaman->id }}" class="text-secondary mx-2">
                        <i class="bi bi-pencil-square"></i>
                      </a>

                      <button class="btn-delete text-secondary mx-2"
                        data-id="{{ $peminjaman->id }}"
                        style="background: none; border: none; padding: 0; cursor: pointer;">
                        <i class="bi bi-trash3-fill"></i>
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
@endsection

@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        // buat megambil data buku
        fetch('/api/peminjaman')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('tbody');
            tableBody.innerHTML = '';
    
            if (data.data.length > 0) {
                data.data.forEach(peminjaman => {
                    const tr = document.createElement('tr');
    
                    tr.innerHTML = `
                        <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${peminjaman.id_buku}</p></td>
                        <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${peminjaman.mahasiswa.nama}</p></td>
                        <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${peminjaman.buku.judul}</p></td>
                        <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${new Date(peminjaman.tanggal_pinjam).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}</p></td>
                        <td class="align-middle"><p class="text-xs font-weight-bold mb-0 ps-3">${new Date(peminjaman.tanggal_kembali).toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' })}</p></td>
                        <td class="align-middle mb-0 ps-3">
                            <a href="/editpeminjaman/${peminjaman.id}" class="text-secondary" data-toggle="tooltip" title="Edit Buku">
                              <i class="bi bi-pencil-square"></i>
                            </a>
                            <button class="btn-delete text-secondary mx-2"
                              data-id="${peminjaman.id}" 
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
@endsection
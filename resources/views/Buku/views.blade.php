@extends('layouts.master')

@section('page-title', 'Data Buku')

@section('content')
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
            <tbody id="dataBuku"></tbody>
          </table>
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
                        <a href="/editbuku/${buku.id}" class="text-secondary" data-toggle="tooltip" title="Edit Buku">
                          <i class="bi bi-pencil-square"></i>
                        </a>
                        <button class="btn-delete text-secondary mx-2"
                          data-id="${buku.id}" 
                          style="background: none; border: none; padding: 0; cursor: pointer;">
                          <i class="bi bi-trash3-fill"></i>
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
@endsection


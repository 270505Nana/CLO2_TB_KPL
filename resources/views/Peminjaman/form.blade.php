
{{-- Menerapkan layouts dari master --}}
@extends('layouts.master')

{{-- yang kemudian dibawah sini dibuat section section yang nntinya akan di yield di file master --}}
@section('page-title', 'Tambah Data Peminjaman')

@section('content')
<div class="card shadow-lg mx-4 card-profile-top mt-4">
  <div class="card-body p-3">
    <div class="row gx-5">
     
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            Form Tambah Data Peminjaman
          </h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Form Card -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <h6 class="mb-0">Isi Data Peminjaman</h6>
            <button type="submit" form="form-peminjaman" class="btn btn-success btn-sm ms-auto">Simpan Data</button>
          </div>
        </div>

        <div class="card-body">
          <form id="form-peminjaman" action="{{ route('peminjaman.store') }}" method="POST">
            @csrf

            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label for="id_buku">Judul Buku</label>
                  <select class="form-control" name="id_buku" id="id_buku" required>
                    <option value="">-- Pilih Buku --</option>
                  </select>

                  @error('id_buku')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>

              

              <div class="col-md-6">
                <div class="form-group">
                  <label for="nim">Nama Mahasiswa</label>
                  <select class="form-control" name="nim" id="nim" required>
                    <option value="">-- Pilih Mahasiswa --</option>
                  </select>

                  @error('nim')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="tgl_peminjaman">Tanggal Peminjaman</label>
                  <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" required>
                  @error('tgl_peminjaman')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                  <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali') }}" required>  
                  @error('tgl_pengembalian')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <!-- Include SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // Event listener saat form disubmit
    document.getElementById('form-peminjaman').addEventListener('submit', async function(e) {
      e.preventDefault();
  
      try {
        const formData = new FormData(this);
        const response = await fetch('/api/peminjaman', {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: formData
        });
  
        const result = await response.json();
  
        if (response.ok) {
          alert('Data peminjaman berhasil ditambahkan!');
          window.location.href = '/datapeminjaman';
        } else {
          alert('Gagal menambahkan data: ' + (result.message || 'Unknown error'));
        }
  
      } catch (error) {
        console.error('Error:', error);
        alert('Terjadi kesalahan jaringan');
      }
    });
  
    // Fetch data buku dan mahasiswa untuk dropdown
    document.addEventListener('DOMContentLoaded', async function () {
      try {
        // Fetch buku
        const bukuResponse = await fetch('/api/buku');
        const bukuResult = await bukuResponse.json();
  
        if (bukuResult.status === 'success') {
          const bukuSelect = document.getElementById('id_buku');
          bukuResult.data.forEach(buku => {
            const option = document.createElement('option');
            option.value = buku.id;
            option.textContent = buku.judul;
            bukuSelect.appendChild(option);
          });
        }
  
        // Fetch mahasiswa
        const mahasiswaResponse = await fetch('/api/mahasiswa');
        const mahasiswaResult = await mahasiswaResponse.json();
  
        if (mahasiswaResult.status === 'success') {
          const mhsSelect = document.getElementById('nim');
          mahasiswaResult.data.forEach(mhs => {
            const option = document.createElement('option');
            option.value = mhs.nim;
            option.textContent = mhs.nama;
            mhsSelect.appendChild(option);
          });
        }
  
      } catch (error) {
        console.error('Gagal fetch data:', error);
      }
    });
  </script>  
  
@endsection
{{-- Menerapkan layouts dari master --}}
@extends('layouts.master')

{{-- yang kemudian dibawah sini dibuat section section yang nntinya akan di yield di file master --}}
@section('page-title', 'Update Data Buku')

@section('content')
  <div class="card shadow-lg mx-4 card-profile-top mt-4">
    <div class="card-body p-3">
      <div class="row gx-5">
      
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
              Form Tambah Data Buku
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
          <form id="form-buku">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="row">
                <!-- Form Judul Buku -->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="judul" class="form-control-label">Judul Buku</label>
                    <input class="form-control" type="text" name="judul" value="{{ old('judul', $buku->judul) }}" placeholder="Masukkan Judul Buku" id="judul" required>
                  </div>
                </div>

                <!-- Form Penulis Buku -->
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="penulis" class="form-control-label">Penulis Buku</label>
                      <input class="form-control" type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" placeholder="Masukkan Penulis Buku" id="penulis" required>
                    </div>
                </div>

                <!-- Form Penerbit Buku -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="penerbit" class="form-control-label">Penerbit</label>
                    <input class="form-control" type="text" name="penerbit"
                        value="{{ old('penerbit', $buku->penerbit) }}"
                        placeholder="Masukkan Penerbit" id="penerbit" required>
                  </div>
                </div>

                <!-- Form Tahun Terbit -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tahun_terbit" class="form-control-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" min="1900" max="2099"
                        step="1" class="form-control"
                        value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"
                        placeholder="Masukkan Tahun Terbit" id="tahun_terbit" required>
                  </div>
                </div>

                <!-- Form Genre Buku -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="genre" class="form-control-label">Genre Buku</label>
                    <input type="text" name="genre" class="form-control"
                        value="{{ old('genre', $buku->genre) }}"
                        placeholder="Masukkan Genre Buku" id="genre" required>
                  </div>
                </div>
            </div>
            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Perbarui Buku</button>
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
    document.getElementById('form-buku').addEventListener('submit', async function(e) {
        e.preventDefault();

        // Ambil data dari form
        const formData = new FormData(this);
        const data = {
            judul: formData.get('judul'),
            penulis: formData.get('penulis'),
            penerbit: formData.get('penerbit'),
            tahun_terbit: formData.get('tahun_terbit'),
            genre: formData.get('genre'),
        };

        // Ambil ID buku dari URL Blade
        const bukuId = "{{ $buku->id }}";

        try {
            const response = await fetch(`/api/buku/${bukuId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (response.ok) {
                alert(result.message);
                window.location.href = "{{ route('buku.index') }}";
            } else {
                alert('Gagal memperbarui data: ' + result.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan.');
        }
    });
  </script>
@endsection
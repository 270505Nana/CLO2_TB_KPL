@extends('layouts.master')

@section('page-title', 'Tambah Data Mahasiswa')

@section('content')
    <div class="card shadow-lg mx-4 card-profile-top mt-4">
      <div class="card-body p-3">
        <div class="row gx-5">
         
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Form Tambah Data Mahasiswa
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

            {{-- button atas --}}
            <div class="card-header pb-0">
              {{-- BUTTON SEND DATA --}}
              {{-- button juga pake tipe yang post ya, buat ngirim data. --}}
              {{-- klo masih bingung bisa usaha chat gpt aja dulu, nnti klo udah paham sma udh ketemu baru chat grup --}}
              <div class="d-flex align-items-center">
                {{-- <p class="mb-0">Edit Profile</p> --}}
                <button type="submit"  form="form-mahasiswa"  class="btn btn-success btn-sm ms-auto">Simpan data</button>
              </div>
            </div>

            {{--CARD FORM  --}}
            <form id="form-mahasiswa" action="{{ route('mahasiswa.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="row">
                  {{-- formmm, nnti diganti jadi post formnya! jgn lupa ya guys --}}
                  <div class="col-md-15">

                    {{-- form judul --}}
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nama mahasiswa</label>
                      <input class="form-control" type="text" name = "nama" placeholder="Masukkan Nama Mahasiswa" id="nama" required value="{{ old('nama') }}">

                        @error('nama')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">NIM Mahasiswa</label>
                      {{-- nana : pastikan id sama nameharus sama kaya ditabel ya klo engga nnti dia ga kekirim ke db --}}
                      <input class="form-control" type="number" name = "nim" placeholder="Masukkan NIM Mahasiswa" id = "nim" required value="{{ old('nim') }}">
                      @error('nim')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Fakultas</label>
                      <input type="text" name="fakultas" class="form-control" placeholder="Masukkan fakultas mahasiswa" required value="{{ old('fakultas') }}">
                      @error('fakultas')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Program Studi</label>
                      <input type="text" name="prodi" class="form-control" placeholder="Masukkan program studi mahasiswa" required value="{{ old('prodi') }}">
                      @error('prodi')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Angkatan/Tahun Masuk Mahasiswa</label>
                      <input type="number" name="angkatan" class="form-control" placeholder="Masukkan tahun masuk mahasiswa" required value="{{ old('angkatan') }}">
                      @error('angkatan')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nomor Handphone Mahasiswa</label>
                      <input type="number" name="nomor_hp" class="form-control" placeholder="Masukkan nomor telepon mahasiswa" required value="{{ old('nomor_hp') }}">
                      @error('nomor_hp')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    // get form by id 'form-mahasiswa' eventnya submit
  document.getElementById('form-mahasiswa').addEventListener('submit', async function(e) {
    e.preventDefault(); // Supaya form tidak reload page

    const formData = new FormData(this);

    try {
      // mengirim data melalui api "api/mahasiswa" dengan method post
      const response = await fetch('/api/mahasiswa', { 
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}' 
        },
        body: formData
      });

      // Ambil respon dari server dan ubah ke bentuk JSON supaya bisa dibaca/dipakai.
      const result = await response.json();

      // Notification
      if (response.ok) {
        alert('Data mahasiswa berhasil ditambahkan!');
        window.location.href = '/datamahasiswa'; 
      } else {
        alert('Gagal menambahkan data: ' + (result.message || 'Unknown error'));
      }
      
    } catch (error) {
      console.error('Error:', error);
      alert('Terjadi kesalahan jaringan');
    }
  });
  </script>
@endsection
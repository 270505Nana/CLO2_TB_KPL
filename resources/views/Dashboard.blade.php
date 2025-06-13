{{-- turunan dari file master, mengadopsi layoutnya --}}
@extends('layouts.master')

{{-- ini untuk section nama pagesnya, nnti di yield di master --}}
@section('page-title', 'Dashboard')

@section('content')
<div class="row">

  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card p-3">
      <div class="row align-items-center">
        <div class="col-8">
          <p class="text-sm mb-0 font-weight-bold">Jumlah Buku</p>
          <h5 class="font-weight-bolder">{{ $jumlahBuku }}</h5>
        </div>
        <div class="col-4 text-end">
          <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle mx-auto">
            <i class="ni ni-books text-white text-m opacity-100"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-5 col-sm-6 mb-4">
    <div class="card p-3">
      <div class="row align-items-center">
        <div class="col-8">
          <p class="text-sm mb-0 font-weight-bold">Jumlah Mahasiswa Terdaftar</p>
          <h5 class="font-weight-bolder">{{ $jumlahMahasiswa}}</h5>
        </div>
        <div class="col-4 text-end">
          <div class="icon icon-shape bg-gradient-danger shadow-primary text-center rounded-circle mx-auto">
            <i class="ni ni-hat-3 text-white text-m opacity-100"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-4 col-sm-6 mb-4">
    <div class="card p-3">
      <div class="row align-items-center">
        <div class="col-8">
          <p class="text-sm mb-0 font-weight-bold">Jumlah Peminjaman</p>

          <h5 class="font-weight-bolder">{{ $jumlahPeminjam}}</h5>
        </div>
        <div class="col-4 text-end">
          <div class="icon icon-shape bg-gradient-success shadow-primary text-center rounded-circle mx-auto">
            <i class="ni ni-book-bookmark text-white text-m opacity-100"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tabel Data Buku -->
<div class="row mt-3 d-flex justify-content-center">
  <div class="col-lg-12 mb-4">
    <div class="card">
      <div class="card-header pb-0 p-3 text-center">
        <h6 class="mb-2">Data Buku Perpustakaan</h6>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center">
          <tbody class="table-group-divider ml-3">
            @foreach ($bukus as $buku)
              <tr>
                <td class="w-30">
                  <div class="d-flex align-items-center px-2 py-1">
                    <div class="ms-3">
                      <p class="text-xs font-weight-bold mb-0">Judul buku:</p>
                      <h6 class="text-sm mb-0">{{ $buku->judul }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="ms-3">
                    <p class="text-xs font-weight-bold mb-0">Penulis:</p>
                    <h6 class="text-sm mb-0">{{ $buku->penulis }}</h6>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
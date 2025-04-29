<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'Dashboard')</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('layouts.sidebar')

  <div class="main-content position-relative max-height-vh-100 h-100">
    @include('layouts.navbar')

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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12 mr-3 ml-3">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                  <button type="submit" form="form-buku" class="btn btn-success btn-sm ms-auto">Simpan Buku</button>
              </div>
            </div>

            {{--CARD FORM  --}}
            <form id="form-buku" method="POST" action="/api/buku">
            <div class="card-body">
                <div class="row">
                  <div class="col-md-15">
                    <div class="form-group">
                      <label for="judul" class="form-control-label">Judul Buku</label>
                      <input class="form-control" type="text" name="judul" placeholder="Masukkan Judul Buku" id="judul" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="penulis" class="form-control-label">Penulis Buku</label>
                      <input class="form-control" type="text" name="penulis" placeholder="Masukkan Penulis Buku" id="penulis" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="penerbit" class="form-control-label">Penerbit</label>
                      <input class="form-control" type="text" name="penerbit" placeholder="Masukkan Penerbit Buku" id="penerbit" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tahun_terbit" class="form-control-label">Tahun Terbit</label>
                      <input type="number" name="tahun_terbit" min="1900" max="2099" step="1" class="form-control" placeholder="Masukkan tahun terbit" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="genre" class="form-control-label">Genre Buku</label>
                      <input type="text" name="genre" class="form-control" placeholder="Masukkan genre buku" required>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    {{-- penggunaan code reuse --}}
    @include('layouts.footer')

    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src={{ asset('assets/js/argon-dashboard.min.js?v=2.1.0')}}></script>

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const submitButton = document.querySelector("button[type='submit'][form='form-buku']");
    const formBuku = document.getElementById("form-buku");

    submitButton.addEventListener("click", function(event) {
      event.preventDefault(); 

      const formData = new FormData(formBuku);

      fetch(formBuku.action, {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          alert('Buku berhasil ditambahkan!');
          window.location.href = '/databuku'; 
        } else {
          alert('Gagal menambahkan buku: ' + data.message);
        }
      })
      .catch(error => {
        console.error('Terjadi kesalahan:', error);
        alert('Terjadi kesalahan. Silakan coba lagi.');
      });
    });
  });
</script>
</body>
</html>
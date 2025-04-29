<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'Mahasiswa')</title>

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
    @include('layouts.sidebar')
    
    <div class="card shadow-lg mx-4 card-profile-top mt-4">
      <div class="card-body p-3">
        <div class="row gx-5">
         
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Form Update Data Mahasiswa
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
            <form id="form-mahasiswa">
              @csrf @method('PUT')
              <div class="card-body">
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>NIM Mahasiswa</label>
                      <input type="number" class="form-control" value="{{$mhs->nim}}" disabled>
                    </div>
                  </div>
              
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama Mahasiswa</label>
                      <input type="text" name="nama" class="form-control" value="{{ old('nama', $mhs->nama) }}" required>
                    </div>
                  </div>
              
            
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Prodi Mahasiswa</label>
                      <input type="text" name="prodi" class="form-control" value="{{ old('prodi', $mhs->prodi) }}" required>
                    </div>
                  </div>
              
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Fakultas Mahasiswa</label>
                      <input type="text" name="fakultas" class="form-control" value="{{ old('fakultas', $mhs->fakultas) }}" required>
                    </div>
                  </div>
              
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Angkatan</label>
                      <input type="number" name="angkatan" class="form-control" value="{{ old('angkatan', $mhs->angkatan) }}" required>
                    </div>
                  </div>
            
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nomor HP</label>
                      <input type="number" name="nomor_hp" class="form-control" value="{{ old('nomor_hp', $mhs->nomor_hp) }}" required>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Perbarui Data Mahasiswa</button>
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
  <script src={{ asset('assets/js/argon-dashboard.min.js?v=2.1.0') }}></script>

  <script>
  document.getElementById('form-mahasiswa').addEventListener('submit', async function(e) {
      e.preventDefault();

      // Ambil data dari form
      const formData = new FormData(this);
      const data = {
          nama: formData.get('nama'),
          prodi: formData.get('prodi'),
          fakultas: formData.get('fakultas'),
          angkatan: formData.get('angkatan'),
          nomor_hp: formData.get('nomor_hp'),
      };

      // Ambil NIM mahasiswa dari Blade
      const nim = "{{ $mhs->nim }}";

      try {
          const response = await fetch(`/api/mahasiswa/${nim}`, {
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
              window.location.href = "{{ route('data.mahasiswa') }}"; 
          } else {
              alert('Gagal memperbarui data: ' + result.message);
          }
      } catch (error) {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat memperbarui.');
      }
  });
</script>
</body>
</html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Peminjaman')</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href={{ asset('assets/css/argon-dashboard.css?v=2.1.0') }} rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('layouts.sidebar')

    <div class="main-content position-relative max-height-vh-100 h-100">
    @include('layouts.sidebar')
    
    <!-- End Navbar -->
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

                        <div class="card-body">
                            <form id="form-peminjaman">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="id_buku">Judul Buku</label>
                                            <select class="form-control" name="id_buku" id="id_buku" required>
                                                <option value="">-- Pilih Buku --</option>
                                                @foreach ($buku as $b)
                                                    <option value="{{ $b->id }}"
                                                        {{ old('id_buku', $peminjaman->id_buku ?? '') == $b->id ? 'selected' : '' }}>
                                                        {{ $b->judul }}
                                                    </option>
                                                @endforeach
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
                                                @foreach ($mahasiswa as $m)
                                                    <option value="{{ $m->nim }}"
                                                        {{ old('nim', $peminjaman->nim ?? '') == $m->nim ? 'selected' : '' }}>
                                                        {{ $m->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('nim')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
                                            <input type="date" class="form-control" name="tanggal_pinjam"
                                                id="tanggal_pinjam"
                                                value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam ?? '') }}"
                                                required>
                                            @error('tanggal_pinjam')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_kembali">Tanggal Pengembalian</label>
                                            <input type="date" class="form-control" name="tanggal_kembali"
                                                id="tanggal_kembali"
                                                value="{{ old('tanggal_kembali', $peminjaman->tanggal_kembali ?? '') }}"
                                                required>
                                            @error('tanggal_kembali')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Perbarui Peminjaman</button>
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

            // Mengambil form peminjaman dan menangani submit
            document.getElementById('form-peminjaman').addEventListener('submit', async function(e) {
                e.preventDefault();

                // Ambil data dari form
                const formData = new FormData(this);
                const data = {
                    nim: formData.get('nim'),
                    id_buku: formData.get('id_buku'),
                    tanggal_pinjam: formData.get('tanggal_pinjam'),
                    tanggal_kembali: formData.get('tanggal_kembali')
                };

                const peminjamanId = "{{ $peminjaman->id }}";

                try {
                    const response = await fetch(`/api/peminjaman/${peminjamanId}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify(data)
                    });

                    const result = await response.json();

                    if (response.ok) {
                        alert(result.message);
                        window.location.href = "{{ route('peminjaman.show') }}";
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

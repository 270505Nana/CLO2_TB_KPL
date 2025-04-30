<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset('assets/img/brain.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/brain.png') }}">
    <title>
        Manajemen Perpustakaan
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href={{ asset('assets/css/argon-dashboard.css?v=2.1.0') }} rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">

                <img src="{{ asset('assets/img/brain-bg.png') }}" width="35px" height="35px"
                    class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Manajemen Perpustakaan</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">

        {{-- NAVBAR --}}
        {{-- navbar nnti dibikin full --}}
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                {{-- list navbar item --}}
                {{-- list navbar item --}}
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    {{-- HREF DIUBAH! --}}
                    <a class="nav-link " href="/databuku">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Buku</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/datamahasiswa">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Mahasiswa</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/datapeminjaman">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Data Peminjaman</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="text-white opacity-5"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Profile</li>
                    </ol>
                    <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
                </nav>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                    </div>
                                </a>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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

        </main>

        <!-- Core JS Files -->
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.1.0') }}"></script>
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
                        window.location.href = "{{ route('data.peminjaman') }}";
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

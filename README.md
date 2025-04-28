Penjelasan buat routes


Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/databuku', function () {
    return view('buku/views');
});

Route::get('/tambahdatabuku', function () {
    return view('FormDataBuku');
});


=========================== Routes MAHASISWA ====================================================


Route::get('/datamahasiswa', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
> jadi nanti button/navbar itu mengarahkan ke /datamahasiswa setelah itu diarahkan ke controller
> Mahasiswa dengan method show untuk menampilkan data. makanya dia menggunakan methodnya GET untuk
> mengambil data
> Untuk menampilkan seluruh data mahasiswa dengan metode GET
> Mengarahkan ke mahasiswa controller dengan method show

Route::get('/tambahdatamahasiswa', function () {
    return view('mahasiswa/form');
});
> Untuk menambahkan data, jadi disini itu nampilin dulu nih formnya
> dengan nama routesnya itu ya tambahdatamahasiswa untuk menampilkan form tambah datanya

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
> Nah kalau ini untuk mengirim, jadi button submit & formnya itu kan menangkap data nih yang diisi
> user, setelah itu akan diarahkan ke mahasiswa controller dengan nama method store untuk mengirim 
> data

Route::get('/editmahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
> Nah kalo ini Route untuk form edit, jadi disini dia nampilin dulu nih formnya
> dengan nama routes ini untuk button editnya


Route::post('/updatemahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
> setelah itu disini dia baru nih mengupdate datanya, mengirim data yang sebelumnya diisi di form edit data mahasiswa. 
> Diarahkan ke mahasiswa controller dengan method namanya update

========================================= Routes Peminjaman=====================================
Route::get('/datapeminjaman', function () {
    return view('DataPeminjaman');
});
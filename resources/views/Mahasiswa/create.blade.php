<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mahasiswa') }}">Daftar Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Form Tambah Mahasiswa</h4>
                    </div>
                    <div class="card-body p-4">

                        <!-- Alert Error Validasi -->
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show">
                                <strong>Gagal menyimpan!</strong> Periksa kembali isian Anda.
                                <ul class="mt-2 mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ url('/mahasiswa') }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                <!-- NPM -->
                                <div class="col-md-6">
                                    <label for="npm" class="form-label">NPM <span class="text-danger">*</span></label>
                                    <input type="number" name="npm" id="npm" class="form-control @error('npm') is-invalid @enderror"
                                           value="{{ old('npm') }}" placeholder="Contoh: 222310001" required>
                                    @error('npm')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Nama -->
                                <div class="col-md-6">
                                    <label for="nama_mahasiswa" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" 
                                           class="form-control @error('nama_mahasiswa') is-invalid @enderror"
                                           value="{{ old('nama_mahasiswa') }}" placeholder="Masukkan nama lengkap" required>
                                    @error('nama_mahasiswa')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-md-6">
                                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L"
                                                   {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }} required>
                                            <label class="form-check-label" for="laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P"
                                                   {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="col-md-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                           value="{{ old('tanggal_lahir') }}">
                                </div>

                                <!-- Alamat -->
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control"
                                              placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>
                                </div>

                                <!-- Program Studi -->
                                <div class="col-md-6">
                                    <label for="prodi" class="form-label">Program Studi</label>
                                    <select name="prodi" id="prodi" class="form-select">
                                        <option value="">-- Pilih Prodi --</option>
                                        <option value="si" {{ old('prodi') == 'si' ? 'selected' : '' }}>Sistem Informasi</option>
                                        <option value="ti" {{ old('prodi') == 'ti' ? 'selected' : '' }}>Teknik Informatika</option>
                                        <option value="komputer" {{ old('prodi') == 'komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary w-100">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
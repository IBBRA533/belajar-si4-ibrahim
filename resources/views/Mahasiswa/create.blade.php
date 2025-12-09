<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <title>create</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mahasiswa">mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">about</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="profil">profil</a>
        </li>
     
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
     <h3>Form Mahasiswa</h3>
      <form action="" method="GET">
        <div class="row">
          <div class="col-sm-6 mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM">
          </div>
          <div class="col-sm-6 mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
          </div>
          <div class="col-sm-6 mb-3">
            <label for="tgl" class="form-label">Tanggal Lahir</label>
            <input type="date" id="tgl" name="tgl" class="form-control">
          </div>
          <div class="col-sm-6 mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <select id="prodi" name="prodi" class="form-control">
              <option value="">Pilih Prodi</option>
              <option value="si">Sistem Informasi</option>
              <option value="komputer">Teknik Komputer</option>
              <option value="ti">Teknik Informatika</option>
            </select>
          </div>
        </div>
        <div class="row mt-3">
  <div class="col-sm-6">
    <button type="submit" class="btn btn-primary w-100">Save</button>
  </div>
  <div class="col-sm-6">
    <a href="/mahasiswa" class="btn btn-secondary w-100">Kembali</a>
  </div>
</div>

      </form>

    
  </div>
</div>

</body>
</html>
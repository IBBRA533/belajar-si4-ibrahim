<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <title>Home</title>
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
    <div class="col-6" >
      <h2>APA itu bootsrap?</h2>
      <p>
        Bootstrap adalah sebuah framework CSS yang sangat populer dan digunakan untuk mempercepat proses pembuatan tampilan website. Dengan menggunakan Bootstrap, seorang pengembang web tidak perlu menulis kode CSS dari awal karena framework ini sudah menyediakan berbagai komponen siap pakai seperti tombol, form, tabel, navigasi (navbar), dan layout yang responsif. Responsif berarti tampilan website secara otomatis akan menyesuaikan dengan ukuran layar perangkat, baik itu ponsel, tablet, maupun komputer.
      </p>
    </div>
     <div class="col-6">
      <h2>APA itu row dan col ?</h2> 
      <p>Row atau baris digunakan sebagai wadah yang menampung kolom. Dalam satu baris, Bootstrap membagi area menjadi dua belas bagian yang bisa diisi oleh kolom dengan lebar yang bervariasi. Misalnya, jika satu kolom menggunakan empat bagian, maka sisa delapan bagian bisa digunakan oleh kolom lainnya dalam baris yang sama. Sistem ini sangat fleksibel karena kita bisa mengatur ukuran kolom sesuai kebutuhan desain.

Struktur dasarnya dimulai dengan sebuah container. Container ini berfungsi sebagai pembungkus utama agar tampilan tidak terlalu menempel pada sisi layar. Di dalam container terdapat row, dan di dalam row terdapat beberapa kolom. Masing-masing kolom bisa diatur ukurannya dengan menambahkan kelas seperti col-4 atau col-8, yang berarti kolom tersebut mengambil empat atau delapan bagian dari total dua belas bagian yang tersedia dalam satu baris.</p>
    </div>

  </div>
</div>
</body>
</html>
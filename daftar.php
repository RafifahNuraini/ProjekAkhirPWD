<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathPartner</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="hal1.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    
     <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="baru.png" alt="Logo" width="90" height="auto" class="d-inline-block align-text-top">
      <span class="text-judul">MathPartner</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-4">
      <ul class="navbar-nav">

        <a style="color: #4f7726;" class="nav-link active" href="tentang.html">Tentang</a>
        <a style="color: #4f7726;" class="nav-link" href="#">Keunggulan</a>
        <a style="color: #4f7726;" class="nav-link" href="#">Testimoni</a>
        <li class="nav-item dropdown list-unstyled">
          <a style="color: #4f7726;" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Kelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Kelas 10</a></li>
            <li><a class="dropdown-item" href="#">Kelas 11</a></li>
            <li><a class="dropdown-item" href="#">Kelas 12</a></li>
          </ul>
        </li>

        </ul>

        <div class="d-flex ms-auto gap-3">
        <a href="daftar.php" class="btn btn-outline-success">Daftar</a>        
        <button class="btn btn-outline-success"> Masuk </button>
    </div>
    </div>

</nav>
<div class="card">
        <div class="card-header">
         <div class="text-regist ">Registrasi Pengguna Baru</div>
    </div>
    <div class="card-body">
<form action="prosesdaftar.php" method="POST">
        <table>
            <tbody class="form-table">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
            <br>
            <label for="usn">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="WAJIB DI ISI">
            <br>
            <label for="password">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd">
            <br>
            <label for="jenis">Jenis Kelamin</label>
            <br>
            <input type="radio" name="JK" value="Laki-laki"> Laki-laki <input type="radio" name="JK" value="Perempuan" > Perempuan
            <br>


</form>
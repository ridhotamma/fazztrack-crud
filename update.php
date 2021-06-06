<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>


<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");

  foreach ($q as $dt) :
  ?>

<nav class="navbar navbar-light bg-danger mb-3 shadow">
      <div class="container-fluid">
      <a href="index.php">
        <span class="navbar-brand mb-0 h1">
          <img src="https://www.fazztrack.com/_nuxt/img/fazztrack-logo-color.db4c9cc.svg"
          width="160px"
          style="background-color: white; padding: 5px"
          class="rounded" 
          alt="logo">
        </span>
        </a>
      </div>
  </nav>

<div class="container-fluid d-flex align-items-start">
<a href="index.php">
<img src="left-arrow.svg" alt="arrow" width=30px; style="padding: 2px; border: 1px solid black; border-radius: 50%;">
</a>
  <div class="container">
    <h3>Halaman Ubah Data</h3>
      <form action="proses_update.php" method="post">
          <input type="hidden" name="id_produk" value="<?= $dt['id_produk'] ?>"><br>
          <input type="text" name="nama_produk" value="<?= $dt['nama_produk'] ?>"><br>
          <input type="text" name="keterangan" value="<?= $dt['keterangan'] ?>"><br>
          <input type="number" name="harga" value="<?= $dt['harga'] ?>"><br>
          <input type="number" name="jumlah" value="<?= $dt['jumlah'] ?>"><br>
          <input class="btn btn-danger" type="submit" name="submit" value="Ubah Data" style="width: 206px !important; margin-top: 10px !important;">
  </form>
  </div>
</div>

  <?php
  endforeach;
}
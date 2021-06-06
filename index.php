<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>CRUD Fazztrack</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-light bg-danger mb-3 shadow">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">
          <img src="https://www.fazztrack.com/_nuxt/img/fazztrack-logo-color.db4c9cc.svg"
          width="160px"
          style="background-color: white; padding: 5px"
          class="rounded" 
          alt="logo">
        </span>
      </div>
  </nav>

  <div class="container">
  <h2>Daftar Produk</h2>
  
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">  
    <input type="text" name="nama_produk" placeholder="Nama Produk" style="width: 14em">
    <input type="text" name="keterangan" placeholder="keterangan" style="width: 14em">
    <input type="number" name="harga" placeholder="Harga" style="width: 14em">
    <input type="number" name="jumlah" placeholder="jumlah" style="width: 14em">
    <input class="btn btn-danger" type="submit" name="submit" value="Tambah Data" >
  </form><br/>

  <!-- Read atau menampilkan data dari database -->
  <table class="table">
    <tr>
      <th scope="col">No.</th> <th scope="col">Nama Produk</th>
      <th scope="col">keterangan</th>
      <th scope="col">Harga</th>
      <th scope="col">jumlah</th>
      <th scope="col" style="text-align: center">Aksi</th>
    </tr>

    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM produk");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_produk'] ?></td>
      <td><?= $dt['keterangan'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><?= $dt['jumlah'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
  </div>
</body>
</html>
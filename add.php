<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $n_produk = $_POST['nama_produk'];
  $keterangan = $_POST['keterangan'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];

  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO produk (id_produk, nama_produk, keterangan, harga, jumlah) VALUES('', '$n_produk', '$keterangan', '$harga', '$jumlah')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>console.log('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>console.log('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
?>
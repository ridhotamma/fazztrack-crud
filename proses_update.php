<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_produk'];
  $n_produk = $_POST['nama_produk'];
  $n_produk = $_POST['keterangan'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE produk SET nama_produk = '$n_produk', harga = '$harga', jumlah = '$jumlah' WHERE id_produk = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>console.log('Data produk berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>console.log('Data produk gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
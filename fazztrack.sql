CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `keterangan`, varchar(256) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL 
);
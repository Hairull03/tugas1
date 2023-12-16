<?php
$no_transaksi = $_POST['no_transaksi'];
$nama_pembeli = $_POST['nama_pembeli'];
$judul_buku = $_POST['judul_buku'];
$jumlah_buku = $_POST['jumlah'];
$harga_buku  = $_POST['harga_buku'];

$hitung = $harga_buku * $jumlah_buku;

if ($hitung > 150000) {
  $diskon_belanja = 0.1 * $hitung;
} else {
  $diskon_belanja = 0;
}

if ($no_transaksi <= 50) {
  $diskon_transaksi = 0.05 * $harga_buku;
} else {
  $diskon_transaksi = 0;
}

$bayar = $hitung - $diskon_belanja - $diskon_transaksi;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Penjualan</title>
  </head>
  <body>
    <h2>Hasil Proses Penjualan</h2>
    No Transaksi: <?php echo $no_transaksi ?><br>
    Nama Pembeli: <?php echo $nama_pembeli ?><br>
    Harga : <?php echo $harga_buku ?><br>
    Diskon Belanja (10%) : <?php echo $diskon_belanja ?><br>
    Diskon Transaksi (5%) : <?php echo $diskon_transaksi ?><br>
    Total Bayar : <?php echo $bayar ?><br><br>
    <a href="coba.php">Kembali</a>
  </body>
</html>

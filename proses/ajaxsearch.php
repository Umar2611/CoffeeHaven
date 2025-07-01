<?php
include '../koneksi/koneksi.php';

$keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
$result = mysqli_query($conn, "SELECT * FROM produk WHERE nama LIKE '%$keyword%'");

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="image/produk/<?= $row['image']; ?>">
      <div class="caption">
        <h3><?= $row['nama']; ?></h3>
        <h4>Rp.<?= number_format($row['harga']); ?></h4>
        <div class="row">
          <div class="col-md-6">
            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-block">Detail</a> 
          </div>
          <div class="col-md-6">
            <a href="keranjang.php" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  }
} else {
  echo "<div class='col-md-12 text-center text-white'><h4>Tidak ada produk ditemukan</h4></div>";
}
?>

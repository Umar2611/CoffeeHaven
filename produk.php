<?php include 'header.php'; ?>

<!-- PRODUK TERBARU -->
<div class="container" style="background-color: #997950; padding: 20px; border-radius: 10px;">
  <h2 style="width: 100%; border-bottom: 4px solid #ffffff;">
    <b style="color: #ffffff">MENU</b>
  </h2>

  <!-- Search Bar -->
  <div class="form-group">
    <input type="text" id="search-bar" class="form-control" placeholder="Cari produk..." onkeyup="cariProduk(this.value)">
  </div>

  <div class="row" id="produk-list">
    <?php 
    $result = mysqli_query($conn, "SELECT * FROM produk");
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
              <?php if(isset($_SESSION['kd_cs'])){ ?>
                <div class="col-md-6">
                  <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $_SESSION['kd_cs']; ?>&hal=1" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                </div>
              <?php } else { ?>
                <div class="col-md-6">
                  <a href="keranjang.php" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Script AJAX -->
<script>
  function cariProduk(keyword) {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("produk-list").innerHTML = xhr.responseText;
      }
    };
    xhr.open("GET", "proses/ajaxsearch.php?keyword=" + encodeURIComponent(keyword), true);
    xhr.send();
  }
</script>

<?php include 'footer.php'; ?>
<?php

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Inventory_ $date1 - $date2.xls");
header("Pragma: no-cache");
header("Expires: 0");

include '../koneksi/koneksi.php';

 
 

// Tampilkan isi tabel
echo "<table border='1'>
<tr>
    <th colspan='4'><b>LAPORAN PRODUKSI</b></th>
</tr>
<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Tanggal</th>
    <th>Total Produksi</th>
</tr>";

$result = mysqli_query($conn, "SELECT * FROM produksi WHERE terima = 1 AND tanggal BETWEEN '$date1' AND '$date2'");
$no = 1;
$total = 0;

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$no}</td>
        <td>{$row['nama_produk']}</td>
        <td>{$row['tanggal']}</td>
        <td>{$row['qty']}</td>
    </tr>";
    $total += $row['qty'];
    $no++;
}

echo "<tr>
    <td colspan='4' align='right'><b>Total Jumlah Produksi = {$total}</b></td>
</tr>
</table>";
?>

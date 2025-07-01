<?php

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Pembatalan_ $date1 - $date2.xls");
header("Pragma: no-cache");
header("Expires: 0");

include '../koneksi/koneksi.php';

 
// Query data pembatalan
$result = mysqli_query($conn, "SELECT * FROM produksi WHERE tolak = 1 AND tanggal BETWEEN '$date1' AND '$date2'");

// Tabel Excel
echo "<table border='1'>
<tr>
    <th colspan='4'><b>LAPORAN PEMBATALAN PESANAN</b></th>
</tr>
<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Tanggal</th>
    <th>Qty</th>
</tr>";

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

// Total
echo "<tr>
    <td colspan='3' align='right'><b>Jumlah Dibatalkan</b></td>
    <td><b>{$total}</b></td>
</tr>
</table>";
?>

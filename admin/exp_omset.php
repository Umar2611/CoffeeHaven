<?php
// Header untuk Excel

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Omset_ $date1 - $date2.xls");
header("Pragma: no-cache");
header("Expires: 0");

include '../koneksi/koneksi.php';

// Ambil tanggal dari POST
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

// Query data
$result = mysqli_query($conn, "SELECT * FROM produksi WHERE terima = 1 AND tanggal BETWEEN '$date1' AND '$date2'");

// Mulai output HTML tabel
echo "<table border='1'>
<tr>
    <th colspan='7'><b>LAPORAN OMSET</b></th>
</tr>
<tr>
    <th>No</th>
    <th>Invoice</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Qty</th>
    <th>Subtotal</th>
    <th>Tanggal</th>
</tr>";

$no = 1;
$total = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $subtotal = $row['harga'] * $row['qty'];
    echo "<tr>
        <td>{$no}</td>
        <td>{$row['invoice']}</td>
        <td>{$row['nama_produk']}</td>
        <td>{$row['harga']}</td>
        <td>{$row['qty']}</td>
        <td>{$subtotal}</td>
        <td>{$row['tanggal']}</td>
    </tr>";
    $total += $subtotal;
    $no++;
}

echo "<tr>
    <td colspan='6' align='right'><b>Total Pendapatan Kotor</b></td>
    <td><b>{$total}</b></td>
</tr>
</table>";
?>

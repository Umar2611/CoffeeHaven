<?php

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Inventory_ $date1 - $date2.xls");
header("Pragma: no-cache");
header("Expires: 0");

include '../koneksi/koneksi.php';

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

echo "<table border='1'>
<tr>
	<th colspan='5'><b>LAPORAN INVENTORY</b></th>
</tr>
<tr>
	<th>No</th>
	<th>Nama Bahan Baku</th>
	<th>Qty</th>
	<th>Satuan</th>
	<th>Tanggal</th>
</tr>";

$result = mysqli_query($conn, "SELECT * FROM inventory WHERE tanggal BETWEEN '$date1' AND '$date2'");
$no = 1;
$total = 0;
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
		<td>{$no}</td>
		<td>{$row['nama']}</td>
		<td>{$row['qty']}</td>
		<td>{$row['satuan']}</td>
		<td>{$row['tanggal']}</td>
	</tr>";
	$total += $row['qty'];
	$no++;
}

echo "<tr>
	<td colspan='5' align='right'><b>Jumlah semua bahan baku = {$total}</b></td>
</tr>
</table>";
?>

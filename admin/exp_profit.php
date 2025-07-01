<?php

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Profit_ $date1 - $date2.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Koneksi ke database
include '../koneksi/koneksi.php';
 

// Tabel Laporan Penjualan
echo "<table border='1'>
<tr>
    <th colspan='7'><b>LAPORAN PENJUALAN / OMSET</b></th>
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

$result = mysqli_query($conn, "SELECT * FROM produksi WHERE terima = 1 AND tanggal BETWEEN '$date1' AND '$date2'");
$no = 1;
$totalOmset = 0;

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
    $totalOmset += $subtotal;
    $no++;
}

echo "<tr>
    <td colspan='6' align='right'><b>Total Pendapatan Kotor (Omset)</b></td>
    <td><b>{$totalOmset}</b></td>
</tr>
</table>";

// Tabel Biaya Bahan Baku
echo "<br><b>Pengurangan Berdasarkan Biaya Bahan Baku</b><br>";
echo "<table border='1'>
<tr>
    <th>No</th>
    <th>Nama Bahan Baku</th>
    <th>Harga per Unit</th>
    <th>Kebutuhan x Qty</th>
    <th>Subtotal</th>
</tr>";

$result2 = mysqli_query($conn, "SELECT * FROM produksi WHERE terima = 1 AND tanggal BETWEEN '$date1' AND '$date2'");
$no2 = 1;
$totalBahanBaku = 0;

while ($row = mysqli_fetch_assoc($result2)) {
    $kd = $row['kode_produk'];
    $qtyOrder = $row['qty'];

    $bahan = mysqli_query($conn, "SELECT b.kebutuhan AS kebutuhan, i.nama AS nama, i.harga AS harga FROM bom_produk b JOIN inventory i ON b.kode_bk = i.kode_bk WHERE b.kode_produk = '$kd'");
    
    while ($row1 = mysqli_fetch_assoc($bahan)) {
        $jumlah = $row1['kebutuhan'] * $qtyOrder;
        $subtotal_bahan = $row1['harga'] * $jumlah;

        echo "<tr>
            <td>{$no2}</td>
            <td>{$row1['nama']}</td>
            <td>{$row1['harga']}</td>
            <td>{$row1['kebutuhan']} x {$qtyOrder} = {$jumlah}</td>
            <td>{$subtotal_bahan}</td>
        </tr>";
        $totalBahanBaku += $subtotal_bahan;
        $no2++;
    }
}

$profitBersih = $totalOmset - $totalBahanBaku;

echo "<tr>
    <td colspan='4' align='right'><b>Total Biaya Bahan Baku</b></td>
    <td><b>{$totalBahanBaku}</b></td>
</tr>
<tr>
    <td colspan='4' align='right' style='color:green;'><b>Total Pendapatan Bersih</b></td>
    <td style='color:green;'><b>{$profitBersih}</b></td>
</tr>
</table>";
?>

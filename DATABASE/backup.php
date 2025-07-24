<?php
// Database configuration
$host = "sql103.infinityfree.com";
$username = "if0_39371486";
$password = "wEyMSIXMG6";
$database_name = "if0_39371486_coffee_haven";
$port = 3306;

// Koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database_name, $port);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$conn->set_charset("utf8");

// Mendapatkan semua tabel dalam database
$tables = array();
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_row($result)) {
    $tables[] = $row[0];
}

// Backup struktur dan data
$sqlScript = "";
foreach ($tables as $table) {
    // Backup struktur tabel
    $query = "SHOW CREATE TABLE `$table`";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    $sqlScript .= "\n\n" . $row[1] . ";\n\n";

    // Backup data tabel
    $query = "SELECT * FROM `$table`";
    $result = mysqli_query($conn, $query);
    $columnCount = mysqli_num_fields($result);

    while ($row = mysqli_fetch_row($result)) {
        $sqlScript .= "INSERT INTO `$table` VALUES(";
        for ($j = 0; $j < $columnCount; $j++) {
            if (isset($row[$j])) {
                $escaped_value = addslashes($row[$j]);
                $escaped_value = str_replace("\n", "\\n", $escaped_value);
                $sqlScript .= '"' . $escaped_value . '"';
            } else {
                $sqlScript .= 'NULL';
            }

            if ($j < ($columnCount - 1)) {
                $sqlScript .= ',';
            }
        }
        $sqlScript .= ");\n";
    }

    $sqlScript .= "\n";
}

// Simpan ke file dan kirim ke browser
if (!empty($sqlScript)) {
    $backup_file_name = $database_name . '_backup_' . date("Y-m-d_H-i-s") . '.sql';
    $fileHandler = fopen($backup_file_name, 'w+');
    fwrite($fileHandler, $sqlScript);
    fclose($fileHandler);

    // Header download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($backup_file_name));
    ob_clean();
    flush();
    readfile($backup_file_name);

    // Hapus file setelah download
    unlink($backup_file_name);
    exit;
}
?>
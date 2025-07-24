<?php
$mysql_host = "sql103.infinityfree.com";
$mysql_database = "if0_39371486_coffee_haven";
$mysql_user = "if0_39371486";
$mysql_password = "wEyMSIXMG6";
$port = 3306;

try {
    $db = new PDO("mysql:host=$mysql_host;port=$port;dbname=$mysql_database", $mysql_user, $mysql_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = file_get_contents("dbpw192_18410100054.sql");
    $status = $db->exec($query);

    if ($status !== false) {
        echo "
        <script>
        alert('RETRIEVE DATABASE BERHASIL');
        window.location = '../admin/halaman_utama.php';
        </script>
        ";
    } else {
        echo "Gagal retrieve database.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

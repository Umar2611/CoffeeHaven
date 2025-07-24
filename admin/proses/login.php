<?php 
session_start();
include '../../koneksi/koneksi.php';

$username = $_POST['user'];
$pass     = $_POST['pass'];

$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
$row    = mysqli_fetch_assoc($result);

if ($row && password_verify($pass, $row['password'])) {
    $_SESSION['admin'] = true;
    $_SESSION['nama_admin'] = $row['nama_admin'];
    $_SESSION['id_admin']   = $row['id_admin'];
    header('location: ../halaman_utama.php');
    exit;
} else {
    echo "<script>
      alert('USERNAME/PASSWORD SALAH');
      window.location = '../index.php';
    </script>";
    exit;
}
?>

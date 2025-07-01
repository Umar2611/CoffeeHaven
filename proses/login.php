<?php 
session_start();
include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['pass'];

// Cek tabel admin
$cek_admin = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
$row_admin = mysqli_fetch_assoc($cek_admin);

// jika berhasil login sebagai admin
if(mysqli_num_rows($cek_admin) === 1){
    if(password_verify($password, $row_admin['password'])){
        $_SESSION['admin'] = $row_admin['nama_admin'];
        $_SESSION['id_admin'] = $row_admin['id_admin'];
        header('location: ../admin/halaman_utama.php'); // ubah ke halaman_utama
        exit;
    }
}

// Cek tabel customer
$cek_cust = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username'");
$row_cust = mysqli_fetch_assoc($cek_cust);

if (mysqli_num_rows($cek_cust) === 1) {
    if (password_verify($password, $row_cust['password'])) {
        $_SESSION['user'] = $row_cust['nama'];
        $_SESSION['kd_cs'] = $row_cust['kode_customer'];
        header('location: ../index.php');
        exit;
    }
}

// Kalau tidak cocok semua
echo "<script>alert('Username/Password salah!'); window.location='../user_login.php';</script>";
exit;

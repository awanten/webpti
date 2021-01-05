<?php
session_start();
include 'admin/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0) {
    header("location:admin/admin.php");
} else {
    header("location:login.php?pesan=gagal");
}

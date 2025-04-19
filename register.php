<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
if (mysqli_num_rows($cek) > 0) {
    header("Location: index.php?error=used");
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
mysqli_query($koneksi, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')");

$_SESSION['user'] = $username;

header("Location: dashboard.php");
exit();
?>

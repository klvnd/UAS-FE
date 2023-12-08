<?php
include("koneksi.php");

$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$password_hashed = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT count(*) AS total FROM admin WHERE email='$email' AND password='$password_hashed'";

$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] > 0) {
    header('Location: admin.php');
    exit(); 
} else {
    header('Location: admin.php');
}

mysqli_close($koneksi);
?>

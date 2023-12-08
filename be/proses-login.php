<?php
// Include the connection file
include("koneksi.php");

// Sanitize user input
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Hash the password with a secure algorithm
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Build the SQL query
$sql = "SELECT count(*) AS total FROM admin WHERE email='$email' AND password='$password_hashed'";

// Execute the query and fetch the result
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

// Check if login is successful
if ($row['total'] > 0) {
    // Login successful
    echo '<script>alert("Login Berhasil")</script>';
    // header('Location: admin.php');
} else {
    // Login failed
    echo '<script>alert("Login Gagal")</script>';
    // header('Location: login.php');
}

// Close the connection
mysqli_close($koneksi);
?>

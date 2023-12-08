<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "db_mobil_listrik"; 

$koneksi = new mysqli("localhost", "root", "", "db_mobil_listrik");

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>

<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    // Perform the deletion query
    $deleteQuery = "DELETE FROM mobil WHERE id_mobil = $id";
    $deleteResult = $koneksi->query($deleteQuery);

    // Redirect back to the main page after deletion
    header("Location: admin.php");
    exit();
}
?>
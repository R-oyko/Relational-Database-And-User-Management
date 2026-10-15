<?php
// config.php
$host = "localhost";
$user = "root";      // Username standar XAMPP
$pass = "";          // Password standar XAMPP (kosong)
$db   = "db_school";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
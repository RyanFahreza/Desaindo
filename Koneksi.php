<?php
// konfigurasi koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// membuat koneksi
$conn = mysqli_connect($server, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>

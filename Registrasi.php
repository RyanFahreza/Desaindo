<?php
// memanggil file koneksi.php
require 'Koneksi.php';

// perintah SQL untuk membuat tabel pengguna
// memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // mengambil nilai dari form
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // memasukkan data ke tabel pengguna
  $sql = "INSERT INTO pengguna (username, email, password)
          VALUES ('$username', '$email', '$password')";

  if (mysqli_query($conn, $sql)) {
    // jika berhasil disimpan, tampilkan pesan sukses
    echo "Registrasi berhasil!";
  } else {
    // jika gagal, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
header("Location: Login.html");
exit;


// menutup koneksi database
mysqli_close($conn);
?>

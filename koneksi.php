<?php
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "mydatabase";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
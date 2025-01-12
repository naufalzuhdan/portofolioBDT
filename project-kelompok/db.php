<?php
$servername = "localhost"; // Atau sesuaikan dengan host Anda
$username = "root"; // Username database Anda
$password = ""; // Password database Anda
$dbname = "becekbersih"; // Nama database Anda

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

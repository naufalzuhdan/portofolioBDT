<?php
session_start(); // Mulai session

// Cek apakah session user_id ada
if (!isset($_SESSION['user_id'])) {
    // Jika tidak ada session user_id, arahkan ke halaman login
    header('Location: login.php');
    exit();
}

// Ambil user_id dari session
$user_id = $_SESSION['user_id'];

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $kode_transaksi = $_POST['kode_transaksi'];
    $no_plat = $_POST['no_plat'];
    $tanggal = $_POST['tanggal'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $nama_customer = $_POST['nama_customer'];
    $biaya = $_POST['biaya'];

    // Buat koneksi ke database
    include('db.php');

    // Query untuk menyimpan transaksi
    $sql = "INSERT INTO transaksi (kode_transaksi, no_plat, tanggal, jenis_kendaraan, nama_customer, biaya, user_id)
            VALUES ('$kode_transaksi', '$no_plat', '$tanggal', '$jenis_kendaraan', '$nama_customer', '$biaya', '$user_id')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Transaksi berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>

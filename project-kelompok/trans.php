<?php
include('db.php');  // Pastikan koneksi ke database sudah benar

// Cek jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_transaksi = $_POST['kode_transaksi'];
    $no_plat = $_POST['no_plat'];
    $tanggal = $_POST['tanggal'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $nama_customer = $_POST['nama_customer'];
    $biaya = $_POST['biaya'];

    // Query untuk memasukkan transaksi tanpa melibatkan user_id
    $sql = "INSERT INTO transaksi (kode_transaksi, no_plat, tanggal, jenis_kendaraan, nama_customer, biaya)
            VALUES ('$kode_transaksi', '$no_plat', '$tanggal', '$jenis_kendaraan', '$nama_customer', '$biaya')";

    if ($conn->query($sql) === TRUE) {
        $message = "Transaksi berhasil disimpan!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<html>
  <head>
    <title>BecekBersih Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
      }
      .container {
        display: flex;
        height: 100vh;
      }
      .sidebar {
        width: 250px;
        background-color: #0a1128;
        color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .sidebar img {
        border-radius: 50%;
        width: 100px;
        height: 100px;
      }
      .sidebar h1 {
        font-size: 24px;
        margin: 20px 0;
      }
      .sidebar ul {
        list-style: none;
        padding: 0;
        width: 100%;
      }
      .sidebar ul li {
        margin: 10px 0;
        border-radius: 5px;
        text-align: center;
      }
      .sidebar ul li a {
        display: block;
        padding: 10px;
        color: white;
        text-decoration: none;
        background-color: #3949ab;
        border-radius: 5px;
      }
      .sidebar ul li a:hover {
        background-color: white;
        color: black;
      }

      .content {
        flex: 1;
        padding: 20px;
        background-color: #f5f5f5;
      }
      .content h2 {
        font-size: 32px;
        margin-bottom: 20px;
      }
      .form-container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .form-container h3 {
        font-size: 24px;
        margin-bottom: 20px;
      }
      .form-group {
        margin-bottom: 15px;
      }
      .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }
      .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      .form-actions {
        display: flex;
        justify-content: space-between;
      }
      .form-actions button {
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        font-size: 16px;
        cursor: pointer;
      }
      .form-actions .save {
        background-color: #4caf50;
        color: white;
      }
      .form-actions .clear {
        background-color: #f44336;
        color: white;
      }
      .form-actions button:hover {
        opacity: 0.8;
      }
      .header {
            background-color: #0d47a1;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header a {
            color: white;
            text-decoration: none;
        }
    </style>
  </head>
  <body>
    <div class="header">
      <h1>BecekBersih</h1>
      <!-- Hapus link Logout jika tidak membutuhkan session -->
    </div>
    <div class="container">
      <div class="sidebar">
        <img alt="Profile picture" height="100" src="image/cuci-motor.png" width="100"/>
        <h1>BecekBersih</h1>
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="trans.php">Transaksi</a></li>
          <li><a href="jenisken.php">Jenis Kendaraan</a></li>
          <li><a href="rekap.php">Rekapitulasi</a></li>
          <li><a href="datapeg.php">Data Pegawai</a></li>
        </ul>
      </div>
      <div class="content">
        <h2>Transaksi</h2>
        <div class="form-container">
          <h3>Form Transaksi</h3>
          
          <!-- Tampilkan pesan jika ada -->
          <?php if (isset($message)): ?>
            <div class="message" style="background-color: #4caf50; color: white; padding: 10px; border-radius: 5px;">
              <?php echo $message; ?>
            </div>
          <?php endif; ?>
          
          <form action="trans.php" method="POST">
            <div class="form-group">
              <label for="kode-transaksi">Kode Transaksi</label>
              <input id="kode-transaksi" name="kode_transaksi" type="text" required />
            </div>
            <div class="form-group">
              <label for="no-plat">Nomor Plat</label>
              <input id="no-plat" name="no_plat" type="text" required />
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input id="tanggal" name="tanggal" type="date" required />
            </div>
            <div class="form-group">
              <label for="jenis-kendaraan">Jenis Kendaraan</label>
              <input id="jenis-kendaraan" name="jenis_kendaraan" type="text" required />
            </div>
            <div class="form-group">
              <label for="nama-customer">Nama Customer</label>
              <input id="nama-customer" name="nama_customer" type="text" required />
            </div>
            <div class="form-group">
              <label for="biaya">Biaya</label>
              <input id="biaya" name="biaya" type="text" required />
            </div>
            <div class="form-actions">
              <button class="save" type="submit">Simpan</button>
              <button class="clear" type="reset">Bersihkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
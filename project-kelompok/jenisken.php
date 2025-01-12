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
      .search-bar {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
      }
      .search-bar input {
        width: 100%;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccc;
        margin-left: 10px;
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
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 3px;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        @media (max-width: 600px) {
            .container {
                width: 100%;
                margin: 10px;
                padding: 10px;
            }
            th, td {
                padding: 5px;
            }
            .btn {
                padding: 3px 5px;
                font-size: 12px;
            }
        }
        .container-1 {
            width: 1500px;

            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
  </head>
  <body>
  <div class="header">
   <h1>
    BecekBersih
   </h1>
   <a href="#">
    Logout
   </a>
  </div>
    <div class="container">
      <div class="sidebar">
        <img alt="Profile picture of a person in a yellow hat with a blue background" height="100" src="image/cuci-motor.png" width="100"/>
        <h1>BecekBersih</h1>
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="trans.php">Transaksi</a></li>
          <li><a href="jenisken.php">Jenis Kendaraan</a></li>
          <li><a href="rekap.php">Rekapitulasi</a></li>
          <li><a href="datapeg.php">Data Pegawai</a></li>
        </ul>
      </div>
      <div class="container-1">
        <h1>Jenis Kendaraan</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>kendaraan</th>
                    <th>biaya</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mobil</td>
                    <td>25.000</td>
                    <td>
                        <a href="#" class="btn btn-edit">edit</a>
                        <a href="#" class="btn btn-delete">hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Motor</td>
                    <td>15.000</td>
                    <td>
                        <a href="#" class="btn btn-edit">edit</a>
                        <a href="#" class="btn btn-delete">hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>
      </div>
    </div>
  </body>
</html>

<html>
 <head>
  <title>
   BecekBersih Dashboard
  </title>
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
        .cards {
            display: flex;
            gap: 20px;
        }
        .card {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
        }
        .card.green {
            background-color: #4caf50;
        }
        .card.blue {
            background-color: #2196f3;
        }
        .card.red {
            background-color: #f44336;
        }
        .card.gray {
            background-color: #9e9e9e;
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
    <h1>
     BecekBersih
    </h1>
    <ul>
     <li>
      <a href="#">Dashboard</a>
     </li>
     <li>
      <a href="trans.php">Transaksi</a>
     </li>
     <li>
      <a href="jenisken.php">Jenis Kendaraan</a>
     </li>
     <li>
      <a href="rekap.php">Rekapitulasi</a>
     </li>
     <li>
      <a href="datapeg.php">Data Pegawai</a>
     </li>
    </ul>
   </div>
   <div class="content">
    <h2>
     Dashboard
    </h2>
    <div class="search-bar">
     <i class="fas fa-search">
     </i>
     <input placeholder="Pencarian" type="text"/>
    </div>
    <div class="cards">
     <div class="card green">
      <p>
       Rp. 25.000
      </p>
      <p>
       total saldo
      </p>
     </div>
     <div class="card blue">
      <p>
       Rp. 15.000
      </p>
      <p>
       pemasukan
      </p>
     </div>
     <div class="card red">
      <p>
       Rp. 10.000
      </p>
      <p>
       pengeluaran
      </p>
     </div>
     <div class="card gray">
      <p>
       Rp. 0-
      </p>
      <p>
       saldo bulan ini
      </p>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>

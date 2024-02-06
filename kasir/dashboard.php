<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=kasir", "root", "");

$query_pelanggan = $pdo->query("SELECT COUNT(*) AS total_pelanggan FROM pelanggan");
$query_petugas = $pdo->query("SELECT COUNT(*) AS total_petugas FROM petugas");
$query_produk = $pdo->query("SELECT COUNT(*) AS total_produk FROM produk");


$result_pelanggan = $query_pelanggan->fetch(PDO::FETCH_ASSOC);
$result_petugas = $query_petugas->fetch(PDO::FETCH_ASSOC);
$result_produk = $query_produk->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Helvetica;
            margin: 150px;
            padding: 0;
            background-image: url('ukk.jpg'); 
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat;
        }

        #header {
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-bottom-left-radius: 100% 10%;
            border-bottom-right-radius: 100% 10%;
            margin-bottom: 20px;
        }

        #welcome {
            font-size: 24px;
        }

        #menu-container {
            text-align: center;
            margin-top: 20px;
        }

        #menu {
            display: inline-block;
        }

        #menu a {
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: blue;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            border-radius: 20px;
        }

        #menu a.logout {
          background-color: red;
          border-radius: 20px;
        }

        #menu a.logout:hover {
            background-color: #ff6666;
        }

        #menu a:hover {
            background-color: #00BFFF;
        }

        h2 {
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 50.50);
  }

    </style>
</head>

<body>

    <div id="header">
        <div id="welcome">
            <h2>SELAMAT DATANG DI KASIR </h2>
        </div>
    </div>

    <div id="menu-container">
        <div id="menu">
            <a href="pembelian.php">PEMBELIAN</a>
            <a href="stok_barang.php">STOCK BARANG</a>
            <a href="detail_penjualan.php">DETAIL PENJUALAN</a>
            
            <?php
            if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
                echo '<a href="data_petugas.php">DATA PETUGAS</a>';
            } 
            ?>
            <a href="logout.php" class="logout">LOGOUT</a>
        </div>
    </div>

    <div style="display: flex; justify-content: center;">
    <div style="width: 20%; text-align: center; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; margin-top: 20px;">
        <i class="fas fa-users" style="font-size: 24px; margin-bottom: 10px;"></i>
        <h3>DATA PELANGGAN</h3>
        <p>TOTAL: <?php echo $result_pelanggan['total_pelanggan']; ?></p>
    </div>

    <div style="width: 20%; text-align: center; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; margin-top: 20px; margin-left: 10px;">
        <i class="fas fa-user-tie" style="font-size: 24px; margin-bottom: 10px;"></i>
        <h3>DATA PETUGAS</h3>
        <p>TOTAL: <?php echo $result_petugas['total_petugas']; ?></p>
    </div>

    <div style="width: 20%; text-align: center; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; margin-top: 20px; margin-left: 10px;">
        <i class="fas fa-box" style="font-size: 24px; margin-bottom: 10px;"></i>
        <h3>DATA PRODUK</h3>
        <p>TOTAL: <?php echo $result_produk['total_produk']; ?></p>
    </div>
</div>

</body>

</html>
